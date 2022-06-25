<?php
    $act = isset($_GET['act']) ? $_GET['act'] : 'home';
    switch ($act) {
        // CASE HEADER
        case 'cart':
            require_once('cart/cart.php');
            break;
        case 'login': //ok
            require_once('account/login.php');
            break;
        case 'register': //ok
            require_once('account/register.php');
            break;

        case "checkout":
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            switch ($act) {
                case 'list':
                    require_once("order/checkout.php");
                    break;
                case 'order_complete':
                    require_once("order/order_complete.php");
                    break;
                default:
                    require_once("order/checkout.php");
                    break;
            }
            break;

        case 'taikhoan':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "login";
            if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true) {
                switch ($act) {
                    case 'login':
                        require_once("login/login.php");
                        break;
                    case 'account':
                        $eve = isset($_GET['eve']) ? $_GET['eve'] : "list";
                        switch ($eve) {
                            case 'list':
                                require_once("account/my_account.php");
                                break;
                            case 'edit':
                                require_once("account/edit_account.php");
                                break;
                            default:
                                require_once("account/my_account.php");
                                break;
                        }
                        break;
                    default:
                        require_once("login/login.php");
                        break;
                }
            } else {
                if ((isset($_SESSION['isLoginAdmin']) && $_SESSION['isLoginAdmin'] == true) || (isset($_SESSION['isLoginShipper']) && $_SESSION['isLoginShipper'] == true)) {
                    switch ($act) {
                        case 'login':
                            require_once("login/login.php");
                            break;
                        case 'account':
                            require_once("account/my_account.php");
                            break;
                        case 'dangxuat':
                            require_once("account/login.php");
                            break;
                        default:
                            require_once("account/login.php");
                            break;
                    }
                } 
                if(isset($_SESSION['isLoginCustomer']) && $_SESSION['isLoginCustomer'] == true){
                    switch ($act){
                        case 'login':
                            require_once("login/login.php");
                            break;
                        case 'account':
                            require_once("account/my_account.php");
                            break;
                        case 'dangxuat':
                            require_once("account/login.php");
                            break;
                        case 'my_order':
                            require_once("order/my_order.php");
                            break;
                        case 'delete_order':
                            require_once("order/my_order.php");
                            break;
                        
                        default:
                            require_once("account/login.php");
                            break;
                    }
                }
                else {
                    switch ($act) {
                        case 'login':
                            require_once("account/login.php");
                            break;
                        case 'dangky':
                            require_once("account/register.php");
                            break;
                        case 'account':
                            require_once("account/my_account.php");
                            break;
                        default:
                            require_once("account/login.php");
                            break;
                    }
                }
                break;
            }

        // CASE NAVIGATION
        case 'home':
            require_once('structure/home.php');
            break;
        case 'promotion':
            require_once('supports_news/promotion.php');
            break;
        case 'introduce':
            require_once('supports_news/introduce.php');
            break;
        case 'size':
            require_once('supports_news/size.php');
            break;
        case 'promotion':
            require_once('supports_news/promotion.php');
            break;
        case 'news':
            require_once('supports_news/news.php');
            break;
            // product detail
        case 'detail':
            require_once('product_details.php');
            break;

            case 'shop':
                require_once('supports_news/shop.php');
                break;

        // CASE FOOTER 
        case 'delivery_policy':
            require_once('supports_news/delivery_policy.php');
            break;
        case 'warranty_policy':
            require_once('supports_news/warranty_policy.php');
            break;
        case 'return_policy':
            require_once('supports_news/return_policy.php');
            break;
        case 'supplier_cooperation':
            require_once('supports_news/supplier_cooperation.php');
            break;
        case 'shopping_guide':
            require_once('supports_news/shopping_guide.php');
            break;
        case 'return_instructions':
            require_once('supports_news/return_instructions.php');
            break;
        case 'payment_guide':
            require_once('supports_news/payment_guide.php');
            break;
        // default:
        //     // require_once('error_page.php');
        //     require_once('account/login.php');
        //     break;
    }
?>
