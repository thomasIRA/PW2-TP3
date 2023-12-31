<?php
RequirePage::model("Log");

class LogManager {

    public function __destruct() {
        $data["ip_address"] = $_SERVER["REMOTE_ADDR"];
        if(isset($_SERVER["PATH_INFO"])) {
            $data["page"] = ltrim( $_SERVER["PATH_INFO"], "/");
        } else $data["page"] = "home";
        if(isset($_SESSION["fingerprint"])) {
            $data["user_name"] = $_SESSION["name"];
            $data["privilege_id"] = $_SESSION["privilege_id"];
        } else $data["name"] = "guest";

        $log = new Log;
        $log->create($data);
    }
}