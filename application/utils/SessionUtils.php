<?php
    session_start();

    function getLoginUser() {
        return isset($_SESSION[_LOGINUSER]) ? $_SESSION[_LOGINUSER] : "";
        //or return isset($_SESSION[_LOGINUSER]) ? $_SESSION[_LOGINUSER] : null;
    }

    function getIuser() {
        return isset(getLoginUser()->iuser) ? getLoginUser()->iuser : "";
        // or return getLoginUser() === null ? null : getLoginUser()->iuser;
    }
    function getMainImgSrc(){ 
        return getIuser() ."/". getLoginUser()->mainimg;
    }