<?php

namespace Wave\Http\Controllers\API;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Wave\Session;
use Wave\Customer;
use Wave\Plan;

class HubtelController extends Controller
{
    public function hubtelUSSD(Request $request){

        $caseType = null;
        if($request->Type == 'Response'){
            if ($request->Sequence == 2) {
                switch ($request->Message) {
                    case '1':
                        $caseType = 'register';
                        break;
                    case '2':
                        $caseType = 'checkbalance';
                        break;
                    case '3':
                        $caseType = 'checkdetails';
                        break;
                    case '4':
                        $caseType = 'contact';
                        break;
                    case '5':
                        $caseType = 'update';
                        break;
                }
            } else {
                $lastsessionData = Session::where('session_id', $request->SessionId)
                                ->whereNotNull('message')
                                ->whereNotNull('request_json')
                                ->whereNull('response_json')
                                ->orderBy('id', 'desc') 
                                ->first();
                $caseType = $lastsessionData->casetype;
            }
        }
        Session::create([
            'request_json' => json_encode($request->all()),
            'mobile' => $request->Mobile,
            'session_id' => $request->SessionId,
            'sequence' => $request->Sequence,
            'message' => $request->Message,
            'casetype' => $caseType
        ]);

        $responseTypeData = $this->handleType($request->Type,$request->Message,$request->Sequence,$request->SessionId,$caseType);

        $lastSelectedData = Session::where('session_id', $request->SessionId)
                          ->whereNotNull('selected_plan_id')
                          ->whereNotNull('payment_system')
                          ->first();

        $selected_plan_id = $lastSelectedData ? $lastSelectedData->selected_plan_id : null; 
        $payment_system = $lastSelectedData ? $lastSelectedData->payment_system : null; 

        if($payment_system != "" && $selected_plan_id != ""){

            $planPrice = Plan::where('plan_id', $selected_plan_id)->first();
                if($payment_system == 1){
                    $column = "daily";
                } else if($payment_system == 2){
                    $column = "weekly";
                } else {
                    $column = "monthly";
                }
            $priceValue = $planPrice->$column;
            $plan_name = $planPrice->name;
            return $this->responseBuilderForPayment(
                $request->SessionId, 
                'AddToCart',                         
                $responseTypeData['message'], 
                $plan_name,
                1,
                $priceValue,
                $responseTypeData['label'],                      
                $responseTypeData['data_type'],                             
                'text'                               
            );
        } else {
            return $this->responseBuilder(
                $request->SessionId, 
                'response',                         
                $responseTypeData['message'], 
                $responseTypeData['label'],                      
                $request->ClientState ? $request->ClientState:"",                               
                $responseTypeData['data_type'],                             
                'text'                               
            );
        }
    }

    public function hubtelUSSDCallback(Request $request)
    {
        $data = $request->validate([
            'SessionId' => 'required|string',
            'OrderId' => 'required|string',
            'OrderInfo' => 'required|array',
            'OrderInfo.CustomerMobileNumber' => 'required|string',
            'OrderInfo.Status' => 'required|string',
            'OrderInfo.Items' => 'required|array',
            'OrderInfo.Payment' => 'required|array',
            'OrderInfo.Payment.IsSuccessful' => 'required|boolean',
        ]);

        $sessionId = $data['SessionId'];
        $orderId = $data['OrderId'];
        $orderInfo = $data['OrderInfo'];
        $customerNumber = $orderInfo['CustomerMobileNumber'];
        $status = $orderInfo['Status'];
        $subtotal = $orderInfo['Subtotal'];
        $items = $orderInfo['Items'];
        $payment = $orderInfo['Payment'];

        if ($payment['IsSuccessful']) {
            $paymentType = $payment['PaymentType'];
            $amountPaid = $payment['AmountPaid'];
            $paymentDescription = $payment['PaymentDescription'];
            if($status == 'Paid'){
                $payment_status = 'complete';
            } else {
                $payment_status = 'failed';
            }
            $planDetail = $data['OrderInfo']['Items'][0];
            $planName = $planDetail['Name'];

            Transaction::create([
                'session_id' => $sessionId,
                'phone_number' => $customerNumber,
                'status' => $payment_status,
                'amount' => $amountPaid,
                'datetime' => $orderInfo['OrderDate'],
            ]);

            $planQuery = Plan::where('name', $planName)->first();
            $PlanID = $planQuery->id;
            Customer::where('phone_number', $customerNumber)->update([
                'balance' => $amountPaid,
                'plan_id' => $PlanID
            ]);

            return response()->json([
                'message' => 'Payment processed successfully',
                'status' => 'success'
            ], 200);

        } else {
            return response()->json([
                'message' => 'Payment failed or incomplete',
                'status' => 'failed'
            ], 400);
        }
    }

    public function handleType($type,$inputmessage,$sequence,$SessionId,$caseType){
        $message = "";
        $label ="";
        $dataType = "";

        $sessionData = Session::where('session_id', $SessionId)
                    ->where('sequence', 2)
                    ->whereNotNull('message')
                    ->whereNotNull('request_json')
                    ->whereNull('response_json')
                    ->orderBy('id', 'desc') 
                    ->first();

        switch ($type) {
            case 'Initiation':
                $message = "Welcome to SMIDO.\nWhat do you want to do:\n1. Register\n2.Check balance\n3. Check details\n4. contact - us\n5.Update";
                $label = "Welcome";
                $dataType = "input";
                break;
            case 'Response':
                switch ($caseType) {
                    case 'register':
                        $RegisterScreen = $this->handleRegisterScreen($SessionId,$sequence);
                        $message = $RegisterScreen['message'];
                        $label = $RegisterScreen['label'];
                        $dataType = $RegisterScreen['data_type'];
                        break;
                    case 'checkbalance':
                        $checkBalanceScreen = $this->handleCheckBalanceScreen($SessionId,$sequence);
                        $message = $checkBalanceScreen['message'];
                        $label = $checkBalanceScreen['label'];
                        $dataType = $checkBalanceScreen['data_type'];
                        break;
                    case 'checkdetails':
                        $checkDetailsScreen = $this->handleCheckDetailsScreen($SessionId,$sequence);
                        $message = $checkDetailsScreen['message'];
                        $label = $checkDetailsScreen['label'];
                        $dataType = $checkDetailsScreen['data_type'];
                        break;
                    case 'contact':
                        $ContactScreen = $this->handleContactScreen($SessionId,$sequence);
                        $message = $ContactScreen['message'];
                        $label = $ContactScreen['label'];
                        $dataType = $ContactScreen['data_type'];
                        break;
                    case 'update':
                        $UpdateScreen = $this->handleUpdateScreen($SessionId,$sequence);
                        $message = $UpdateScreen['message'];
                        $label = $UpdateScreen['label'];
                        $dataType = $UpdateScreen['data_type'];
                        break;
                    case '2':
                        $SecondScreen = $this->handleSecondScreen($SessionId);
                        $message = $SecondScreen['message'];
                        $label = $SecondScreen['label'];
                        $dataType = $SecondScreen['data_type'];
                        break;
                    case '3':
                        $ThirdScreen = $this->handleThirdScreen($SessionId);
                        $message = $ThirdScreen['message'];
                        $label = $ThirdScreen['label'];
                        $dataType = $ThirdScreen['data_type'];
                        break;
                    case '4':
                        $FourthScreen = $this->handleFourthScreen($SessionId);
                        $message = $FourthScreen['message'];
                        $label = $FourthScreen['label'];
                        $dataType = $FourthScreen['data_type'];
                        break;
                    case '5':
                        $FifthScreen = $this->handleFifthScreen($SessionId);
                        $message = $FifthScreen['message'];
                        $label = $FifthScreen['label'];
                        $dataType = $FifthScreen['data_type'];
                        break;
                    case '6':
                        $SixthScreen = $this->handleSixthScreen($SessionId);
                        $message = $SixthScreen['message'];
                        $label = $SixthScreen['label'];
                        $dataType = $SixthScreen['data_type'];
                        break;
                    case '7':
                        $SeventhScreen = $this->handleSeventhScreen($SessionId);
                        $message = $SeventhScreen['message'];
                        $label = $SeventhScreen['label'];
                        $dataType = $SeventhScreen['data_type'];
                        break;
                    case '8':
                        $EighthScreen = $this->handleEighthScreen($SessionId);
                        $message = $EighthScreen['message'];
                        $label = $EighthScreen['label'];
                        $dataType = $EighthScreen['data_type'];
                        break;
                    case '9':
                        $NinthScreen = $this->handleNinthScreen($SessionId);
                        $message = $NinthScreen['message'];
                        $label = $NinthScreen['label'];
                        $dataType = $NinthScreen['data_type'];
                        break;
                }
                break;       
            
        }
        return [
            "message" => $message,
            "label"=>$label,
            "data_type"=>$dataType
        ];
    }

    /**
     * Build a structured response.
     *
     * @param string $sessionId
     * @param string $type
     * @param string $message
     * @param string $label
     * @param string $clientState
     * @param string $dataType
     * @param string $fieldType
     * @return JsonResponse
     */
    public function responseBuilder(
        string $sessionId,
        string $type,
        string $message,
        string $label,
        string $clientState="",
        string $dataType,
        string $fieldType
    ): JsonResponse {
        // Structure the response array
        $response = [
            'SessionId'   => $sessionId,
            'Type'        => $type,
            'Message'     => $message,
            'Label'       => $label,
            'ClientState' => $clientState,
            'DataType'    => $dataType,
            'FieldType'   => $fieldType,
        ];

        Session::create([
            'response_json' => json_encode($response),
            'session_id' => $sessionId,
            'message' => $message
        ]);


        // Return the response as a JSON
        return response()->json($response);
    }

    public function responseBuilderForPayment(
        string $sessionId,
        string $type,
        string $message,
        string $plan_name,
        string $quantity,
        string $priceValue,
        string $label,
        string $dataType,
        string $fieldType
    ): JsonResponse {
        // Structure the response array
        $response = [
            'SessionId'   => $sessionId,
            'Type'        => $type,
            'Message'     => $message,
            'Item' => [
                'ItemName' => $plan_name, 
                'Qty' => $quantity,                 
                'Price' => 1    // $priceValue replace this variable to 1 when project goes to live    
            ],
            'Label'       => $label,
            'DataType'    => $dataType,
            'FieldType'   => $fieldType,
        ];

        Session::create([
            'response_json' => json_encode($response),
            'session_id' => $sessionId,
            'message' => $message
        ]);


        // Return the response as a JSON
        return response()->json($response);
    }

    public function handleRegisterScreen($SessionId,$sequence){
        $message = "";
        $label ="";
        $dataType = "";
        switch ($sequence) {
            case '2':
                $message = "Enter your First Name";
                $label = "FirstName";
                $dataType = "text";
                break;
            case '3':
                $message = "Enter your Last Name";
                $label = "LastName";
                $dataType = "text";
                break;
            case '4':
                $message = "Enter your Phone Number";
                $label = "PhoneNumber";
                $dataType = "text";
                break;
            case '5':
                $message = "Enter 4 digits pin";
                $label = "PIN";
                $dataType = "text";
                break;
            default:
            if ($sequence >= 6) {
                if ($sequence == 6) {
                    $sessionData = Session::where('session_id', $SessionId)
                                ->whereNotNull('message')
                                ->whereNotNull('request_json')
                                ->whereNull('response_json')
                                ->orderBy('id', 'desc') 
                                ->skip(4) 
                                ->first();                    

                    $firstName = Session::where('session_id', $SessionId)
                            ->whereNotNull('message')
                            ->whereNotNull('request_json')
                            ->whereNull('response_json')
                            ->orderBy('id', 'desc') 
                            ->skip(3) 
                            ->first();
                    $lastName = Session::where('session_id', $SessionId)
                            ->whereNotNull('message')
                            ->whereNotNull('request_json')
                            ->whereNull('response_json')
                            ->orderBy('id', 'desc') 
                            ->skip(2) 
                            ->first();
                    $phoneNumber = Session::where('session_id', $SessionId)
                            ->whereNotNull('message')
                            ->whereNotNull('request_json')
                            ->whereNull('response_json')
                            ->orderBy('id', 'desc') 
                            ->skip(1) 
                            ->first();

                    $PIN = Session::where('session_id', $SessionId)
                                ->whereNotNull('message')
                                ->whereNotNull('request_json')
                                ->whereNull('response_json')
                                ->orderBy('id', 'desc') 
                                ->first();

                    Customer::create([
                        'name' => $firstName->message . " " . $lastName->message,
                        'phone_number' => $phoneNumber->message,
                        'pin' => $PIN->message
                    ]);

                    Session::where('session_id', $SessionId)->update([
                        'packages_start_index' => 0,
                        'package_selection' => true
                    ]);
                }

                $lastsessionData = Session::where('session_id', $SessionId)
                                  ->whereNotNull('selected_plan_id')
                                  ->first();
                $selected_plan_id = $lastsessionData ? $lastsessionData->selected_plan_id : null; 
                if($selected_plan_id != ''){
                    $lastsessionData = Session::where('session_id', $SessionId)
                                  ->whereNotNull('message')
                                  ->whereNotNull('request_json')
                                  ->whereNull('response_json')
                                  ->orderBy('id', 'desc')
                                  ->first();
                    $payment_system = $lastsessionData->message;
                    Session::create([
                        'selected_plan_id' => $selected_plan_id,
                        'session_id' => $SessionId,
                        'payment_system' => $payment_system,
                    ]);
                    $message = "Payment Initiated";
                    $label = "Payment";
                    $dataType = "display";
                    break;
                }

                $session = Session::where('session_id', $SessionId)->first();
                $start = $session ? $session->packages_start_index : 0;

                return $this->handlePackageNavigation($SessionId,$start);
            }
        }
        return [
            "message" => $message,
            "label"=>$label,
            "data_type"=>$dataType
        ];
    }

    public function handleCheckBalanceScreen($SessionId,$sequence){
        $message = "";
        $label ="";
        $dataType = "";
        switch ($sequence) {
            case '2':
                $message = "Enter your Phone Number";
                $label = "PhoneNumber";
                $dataType = "text";
                break;
            case '3':
                $message = "Enter your PIN";
                $label = "PIN";
                $dataType = "text";
                break;
            case '4':
                $phoneNumberforBalance = Session::where('session_id', $SessionId)
                                ->whereNotNull('message')
                                ->whereNotNull('request_json')
                                ->whereNull('response_json')
                                ->orderBy('id', 'desc') 
                                ->skip(1) 
                                ->first();

                $PINforBalance = Session::where('session_id', $SessionId)
                                ->whereNotNull('message')
                                ->whereNotNull('request_json')
                                ->whereNull('response_json')
                                ->orderBy('id', 'desc') 
                                ->first();

                $balance = Customer::where('phone_number', $phoneNumberforBalance->message)->where('pin', $PINforBalance->message)->first();
                $message = "Balance: ". $balance->balance;
                $label = "PIN";
                $dataType = "text";
                break;
        }

        return [
            "message" => $message,
            "label"=>$label,
            "data_type"=>$dataType
        ];
    }

    public function handleCheckDetailsScreen($SessionId,$sequence){
        $message = "";
        $label ="";
        $dataType = "";
        switch ($sequence) {
            case '2':
                $message = "Enter your Phone Number";
                $label = "PackagePhoneNumber";
                $dataType = "";
                break;
            case '3':
                $phoneNumberforCheckDetails = Session::where('session_id', $SessionId)
                            ->whereNotNull('message')
                            ->whereNotNull('request_json')
                            ->whereNull('response_json')
                            ->orderBy('id', 'desc')
                            ->first();
                $customer = Customer::where('phone_number', $phoneNumberforCheckDetails->message)->first();
                $plan = Plan::where('plan_id', $customer->plan_id)->first();

                $message = "Package Name: " . $plan->name . "\nMeasurements: " . $plan->description . "\nPrice: " . $plan->price . "\nDaily: " . $plan->daily . "\nWekly: " . $plan->weekly . "\nMonthly: " . $plan->monthly;
                $label = "Details";
                $dataType = "text";
                break;

        }

        return [
            "message" => $message,
            "label"=>$label,
            "data_type"=>$dataType
        ];
    }

    public function handleContactScreen($SessionId,$sequence){
        $message = "";
        $label ="";
        $dataType = "";
        switch ($sequence) {
            case '2':
                $message = "Please call us on below number.\n+1 1234567890 \n Or email us at below email. \nsmido@gmail.com";
                $label = "Contact";
                $dataType = "";
                break;
        }
        return [
            "message" => $message,
            "label"=>$label,
            "data_type"=>$dataType
        ];
    }

    public function handleUpdateScreen($SessionId,$sequence){
        $message = "";
        $label ="";
        $dataType = "";
        
        switch ($sequence) {
            case '2':
                $message = "Enter your Phone Number";
                $label = "PhoneNumber";
                $dataType = "text";
                break;
            case '3':
                $message = "Enter your Code";
                $label = "Code";
                $dataType = "text";
                break;
            default:
                if ($sequence == 4) {
                    $phoneNumberforUpdate = Session::where('session_id', $SessionId)
                                ->whereNotNull('message')
                                ->whereNotNull('request_json')
                                ->whereNull('response_json')
                                ->orderBy('id', 'desc')
                                ->skip(1)
                                ->first();
                    $PINforupdate = Session::where('session_id', $SessionId)
                                    ->whereNotNull('message')
                                    ->whereNotNull('request_json')
                                    ->whereNull('response_json')
                                    ->orderBy('id', 'desc') 
                                    ->first();
                    $customer = Customer::where('phone_number', $phoneNumberforUpdate->message)->where('pin', $PINforupdate->message)->first();
                    $plan = Plan::where('plan_id', $customer->plan_id)->first();

                    $session = Session::where('session_id', $SessionId)->first();
                    $start = $session ? $session->packages_start_index : 0;

                    $lastsessionData = Session::where('session_id', $SessionId)
                                    ->whereNotNull('selected_plan_id')
                                    ->first();
                    $selected_plan_id = $lastsessionData ? $lastsessionData->selected_plan_id : null; 
                    if($selected_plan_id != ''){
                        $lastsessionData = Session::where('session_id', $SessionId)
                                    ->whereNotNull('message')
                                    ->whereNotNull('request_json')
                                    ->whereNull('response_json')
                                    ->orderBy('id', 'desc')
                                    ->first();
                        $payment_system = $lastsessionData->message;
                        Session::create([
                            'selected_plan_id' => $selected_plan_id,
                            'session_id' => $SessionId,
                            'payment_system' => $payment_system,
                        ]);
                        $message = "Payment Initiated";
                        $label = "Payment";
                        $dataType = "display";
                        break;
                    }

                    return $this->handlePackageNavigationForUpdate($SessionId,$start,$plan);
                } else {

                    $lastsessionData = Session::where('session_id', $SessionId)
                                    ->whereNotNull('selected_plan_id')
                                    ->first();
                    $selected_plan_id = $lastsessionData ? $lastsessionData->selected_plan_id : null; 
                    if($selected_plan_id != ''){
                        $lastsessionData = Session::where('session_id', $SessionId)
                                    ->whereNotNull('message')
                                    ->whereNotNull('request_json')
                                    ->whereNull('response_json')
                                    ->orderBy('id', 'desc')
                                    ->first();
                        $payment_system = $lastsessionData->message;
                        Session::create([
                            'selected_plan_id' => $selected_plan_id,
                            'session_id' => $SessionId,
                            'payment_system' => $payment_system,
                        ]);
                        $message = "Payment Initiated";
                        $label = "Payment";
                        $dataType = "display";
                        break;
                    }

                    $session = Session::where('session_id', $SessionId)->first();
                    $start = $session ? $session->packages_start_index : 0;

                    return $this->handlePackageNavigation($SessionId,$start);
                }
                break;
        }
        return [
            "message" => $message,
            "label"=>$label,
            "data_type"=>$dataType
        ];
    }

    public function handlePackageNavigation($SessionId,$start) {
        $perPage = setting('admin.plans_per_page') ?? 6;
        
        $lastsessionData = Session::where('session_id', $SessionId)
                                  ->whereNotNull('message')
                                  ->whereNull('response_json')
                                  ->orderBy('id', 'desc')
                                  ->first();
        $userInput = $lastsessionData->message;

        if ($userInput !== '#' && $userInput !== '0') {
            $planDetails = Plan::where('plan_id', $userInput)->first();
    
            if ($planDetails) {

                Session::create([
                    'selected_plan_id' => $planDetails->plan_id,
                    'session_id' => $SessionId
                ]);
                
                return [
                    "message" => $planDetails->name 
                                . "\nPrice: " . $planDetails->price 
                                . "\n1. Daily: " . $planDetails->daily 
                                . "\n2. Weekly: " . $planDetails->weekly 
                                . "\n3. Monthly: " . $planDetails->monthly,
                    "label" => "PaymentType",
                    "data_type" => "text"
                ];
            }
        }
        
        if ($userInput == '#') {
            $start += $perPage; 
        } elseif ($userInput == '0') {
            $start = max(0, $start - $perPage); 
        }

        Session::where('session_id', $SessionId)->update(['packages_start_index' => $start]);
        
        $plans = Plan::orderByRaw('CAST(plan_sequence AS UNSIGNED) ASC')
                     ->skip($start)
                     ->take($perPage)
                     ->get();
    
        $packages = "Choose your plan:";
        foreach ($plans as $plan) {
            $packages .= "\n" . $plan->plan_id . ". " . $plan->name;
        }
    
        $totalPlans = Plan::count();
        if ($start > 0) {
            $packages .= "\n0. Show me previous packages";
        }
        if ($start + $perPage < $totalPlans) {
            $packages .= "\n#. Show me next packages";
        }

        return [
            "message" => $packages,
            "label" => "Packages",
            "data_type" => "text"
        ];
    }

    public function handlePackageNavigationForUpdate($SessionId,$start,$plan) {
        $perPage = setting('admin.plans_per_page') ?? 6;
        
        $lastsessionData = Session::where('session_id', $SessionId)
                                  ->whereNotNull('message')
                                  ->whereNull('response_json')
                                  ->orderBy('id', 'desc')
                                  ->first();
        $userInput = $lastsessionData->message;

        if ($userInput !== '#' && $userInput !== '0') {
            $planDetails = Plan::where('plan_id', $userInput)->first();
    
            if ($planDetails) {

                Session::create([
                    'selected_plan_id' => $planDetails->plan_id,
                    'session_id' => $sessionId,
                ]);
                
                return [
                    "message" => $planDetails->name 
                                . "\nPrice: " . $planDetails->price 
                                . "\n1. Daily: " . $planDetails->daily 
                                . "\n2. Weekly: " . $planDetails->weekly 
                                . "\n3. Monthly: " . $planDetails->monthly,
                    "label" => "PaymentType",
                    "data_type" => "text"
                ];
            }
        }
        
        if ($userInput == '#') {
            $start += $perPage;  
        } elseif ($userInput == '0') {
            $start = max(0, $start - $perPage);  
        }

        Session::where('session_id', $SessionId)->update(['packages_start_index' => $start]);
        
        $plans = Plan::orderByRaw('CAST(plan_sequence AS UNSIGNED) ASC')
                     ->skip($start)
                     ->take($perPage)
                     ->get();
    
        $packages = "Your old plan: " . $plan->name . "\nChoose your new plan:";
        foreach ($plans as $plan) {
            $packages .= "\n" . $plan->plan_id . ". " . $plan->name;
        }
    
        $totalPlans = Plan::count();
        if ($start > 0) {
            $packages .= "\n0. Show me previous packages";
        }
        if ($start + $perPage < $totalPlans) {
            $packages .= "\n#. Show me next packages";
        }

        return [
            "message" => $packages,
            "label" => "Packages",
            "data_type" => "text"
        ];
    } 
    
}
