<?php
    session_start();
    $mod = isset($_GET['act']) ? $_GET['act'] : 'home';
    switch ($mod) {
        case 'home':
            require_once('Controllers/home_controller.php');
            $controller_obj = new HomeController();
            $controller_obj->list();
            break;
        case 'promotion':
            require_once('Controllers/promotion_controller.php');
            $controller_obj = new PromotionController();
            $controller_obj->list();
            break;
        case 'shop':
            require_once('Controllers/shop_controller.php');
            $controller_obj = new ShopController();
            $controller_obj->list();
            break;
        case 'search':
            require_once('Controllers/shop_controller.php');
            $controller_obj = new ShopController();
            $controller_obj->list();
            break;
        case 'detail':
            require_once('Controllers/detail_controller.php');
            $controller_obj = new DetailController();
            $controller_obj->list();
            break;
        case 'buynow':
            require_once('Controllers/buynow_controller.php');
            $controller_obj = new BuyNowController();
            $controller_obj->list();
            break;
        
        case 'taikhoan':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "taikhoan";
            require_once('Controllers/login_controller.php');
            $controller_obj = new LoginController();
            if ((isset($_SESSION['isLoginCustomer']) && $_SESSION['isLoginCustomer'] == true)) {
                switch ($act) {
                    case 'dangxuat':
                        $controller_obj->dangxuat();
                        break;
                    case 'account':
                        $eve = isset($_GET['eve']) ? $_GET['eve'] : "list";
                        require_once("Controllers/account_controller.php");
                        $controller_obj = new AccountController();
                        switch ($eve) {
                            case 'list':
                                $controller_obj->list();
                                break;
                            case 'edit':
                                $controller_obj->edit();
                                break;
                            default:
                                header('location: ?act=error');
                                break;
                        }
                        break;
                    case 'update':
                        $controller_obj->update();
                        break;
                    case 'my_order':
                        $controller_obj->my_order();
                        break;
                    case 'delete_order':
                        $controller_obj->delete_order();
                        break;
                    default:
                        header('location: ?act=error');
                        break;
                } break;
            } else {
                if ((isset($_SESSION['isLoginAdmin']) && $_SESSION['isLoginAdmin'] == true) || (isset($_SESSION['isLoginShipper']) && $_SESSION['isLoginShipper'] == true)) {
                    switch ($act) {
                        case 'dangxuat':
                            $controller_obj->dangxuat();
                            break;
                        case 'account':
                            $controller_obj->account();
                            break;
                        case 'update':
                            $controller_obj->update();
                            break;
                        default:
                            header('location: ?act=error');
                            break;
                    } break;
                } else {
                    switch ($act) {
                        case 'login':
                            $controller_obj->login();
                            break;
                        case 'dangnhap':
                            $controller_obj->login_action();
                            break;
                        case 'dangky':
                            $controller_obj->dangky();
                            break;
                        default:
                            $controller_obj->login();
                            break;
                    } break;
                }
            }


        case 'checkout':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            require_once('Controllers/checkout_controller.php');
            $controller_obj = new CheckoutController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'save':
                    $controller_obj->save();
                    break;
                case 'order_complete':
                    $controller_obj->order_complete();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;

        case 'cart':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            require_once('Controllers/cart_controller.php');
            $controller_obj = new CartController();
            switch ($act) {
                case 'list':
                    $controller_obj->list_cart();
                    break;
                case 'update':
                    $controller_obj->update_cart();
                    break;
                case 'add':
                    $controller_obj->add_cart();
                    break;
                case 'delete':
                    $controller_obj->delete_cart();
                    break;
                case 'deleteall':
                    $controller_obj->deleteall_cart();
                    break;
                default:
                    $controller_obj->list_cart();
                    break;
            }
            break;

        default:
            require_once('Controllers/home_controller.php');
            $controller_obj = new HomeController();
            $controller_obj->list();
            break;
    }
?>