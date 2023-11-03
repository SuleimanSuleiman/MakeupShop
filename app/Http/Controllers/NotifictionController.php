<?php

namespace App\Http\Controllers;

use App\Events\NoftifyAdmins;
use App\Interfaces\NotificationInterface;
use App\Models\Notifiction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NotifictionController extends Controller implements NotificationInterface
{

    public function createNotification($message_type, $object_type, $object_id)
    {
        try {

            $admin = Auth::guard('admin')->user();

            $message = $this->generateMessage($message_type, $object_type, $object_id);

            $storeNotificationINDB = $this->store($message, $admin, $object_type, $object_id);


            if ($storeNotificationINDB) {
                $this->sendEvent($message, $admin, $object_type, $object_id);
                return true;
            } else {
                throw new Exception('Failed to Store Notification in DB');
            }
        } catch (Exception $error) {
            throw new Exception($error->getMessage());
        }
    }

    public function store(string $messge, $admin, $object_type, $object_id)
    {
        try {
            $newNotifiction = new Notifiction();

            $newNotifiction->fill([
                'message' =>  $messge ?? "Null Message",
                'admin_Id' => $admin->id,
                'object_type' => $object_type,
                'object_id' => $object_id
            ]);

            if ($newNotifiction->save()) {
                return true;
            }
        } catch (Exception $error) {
            throw new Exception($error->getMessage());
        }
    }

    public function sendEvent(string $messge, $admin, $object_type, $object_id)
    {
        broadcast(new NoftifyAdmins($messge, $admin, $object_type, $object_id));
    }

    public function generateMessage($message_type, $object_type, $object_id)
    {
        return Auth::guard('admin')->user()->name . ' ' . $message_type . ' ' . $object_type;
    }

    public function getAllNotifcation()
    {
        try {
            $notifcations =  $this->getNotification();
            return view('Admin.show-notifications', compact('notifcations'));
        } catch (Exception $error) {
            return redirect()->back()->withErrors(['error' => $error->getMessage()]);
        }
    }
    public function getNotification($numberOfNotification = null)
    {
        try {
            if ($numberOfNotification) {
                $getnotifications = Notifiction::latest('created_at')->take($numberOfNotification)->get();
            } else {
                $getnotifications = Notifiction::orderBy('created_at', 'desc')->get();
            }
            return $getnotifications;
        } catch (Exception $error) {
            throw new Exception($error->getMessage());
        }
    }
}
