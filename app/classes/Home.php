<?php


namespace App\classes;
use App\classes\Product;
use App\classes\Menu;
use App\classes\SubMenu;
use App\classes\User;

class Home
{
    public $menu, $menus = [], $subMenu, $subMenus = [], $product, $products = [], $user, $users = [], $singleProduct;

    public function __construct()
    {
        session_start();
        $this->menu = new Menu();
        $this->menus = $this->menu->getAllMenu();
        $this->subMenu = new SubMenu();
        $this->subMenus = $this->subMenu->getAllSubMenu();
        $this->product = new Product();
        $this->products = $this->product->getAllProduct();
        $this->user = new User();
        $this->users = $this->user->getAllUser();
    }

    public function index()
    {
        return view('home',['menus' => $this->menus, 'sub_menus' => $this->subMenus, 'products' => $this->products]);
    }
    public function about()
    {
        return view('about',['menus' => $this->menus,'sub_menus' => $this->subMenus]);
    }
    public function contact()
    {
        return view('contact',['menus' => $this->menus,'sub_menus' => $this->subMenus]);
    }

    public function subMenuProduct($id)
    {
        $this->product = new Product();
        $this->products = $this->product->getSubMenuProduct($id);

        return view('category',['menus' => $this->menus,'sub_menus' => $this->subMenus, 'products' => $this->products]);
    }

    public function productDetail($id)
    {
        $this->product = new Product();
        $this->singleProduct = $this->product->getProductById($id);

        return view('detail', ['menus' => $this->menus,'sub_menus' => $this->subMenus, 'product' => $this->singleProduct]);
    }

    public function login($message = '')  // we can give here ('' or null). this work as same
    {
        if (isset($_SESSION['id']))
        {
            header('Location: action.php?page=dashboard');
        }
        else
        {
            return view('login',['menus' => $this->menus,'sub_menus' => $this->subMenus, 'message' => $message]);
        }
    }


    public function dashboard()
    {
        if (isset($_SESSION['id']))
        {
            return view('dashboard',['menus' => $this->menus,'sub_menus' => $this->subMenus, 'users' => $this->users]);
        }
        else
        {
            header('Location: action.php?page=login');
        }
    }


}