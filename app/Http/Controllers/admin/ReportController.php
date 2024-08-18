<?php

namespace App\Http\Controllers\admin;
;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use DataTables;
use PDF;

class ReportController extends Controller
{
    public function ordersReport()
    {
        $orders = Order::with('user', 'orderItems')->get();
        return view('admin.reports.orders', compact('orders'));
    }

    public function productsReport()
    {
        $products = Product::with('category', 'variants')->get();
        return view('admin.reports.products', compact('products'));
    }

    public function usersReport()
    {
        $users = User::with('orders')->get();
        return view('admin.reports.users', compact('users'));
    }

    public function ordersReportPdf()
    {
        $orders = Order::with('user', 'orderItems')->get();
        $pdf = PDF::loadView('admin.reports.pdf.orders', compact('orders'));
        return $pdf->download('orders_report.pdf');
    }

    public function productsReportPdf()
    {
        $products = Product::with('category', 'variants')->get();
        $pdf = PDF::loadView('admin.reports.pdf.products', compact('products'));
        return $pdf->download('products_report.pdf');
    }

    public function usersReportPdf()
    {
        $users = User::with('orders')->get();
        $pdf = PDF::loadView('admin.reports.pdf.users', compact('users'));
        return $pdf->download('users_report.pdf');
    }
}

