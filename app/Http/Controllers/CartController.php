<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // View the cart
    public function viewCart()
    {
        // Fetch cart items from session
        $cart = session()->get('cart', []);

        return view('cart.index', compact('cart'));
    }

    // Add item to cart
    public function addToCart(Request $request)
    {
        $productId = $request->input('id');
        $productName = $request->input('name');
        $productPrice = $request->input('price');
        $productQuantity = $request->input('quantity', 1);

        // Get the cart from session
        $cart = session()->get('cart', []);

        // If product already exists in the cart, update its quantity
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $productQuantity;
        } else {
            // Add product to the cart
            $cart[$productId] = [
                'name' => $productName,
                'price' => $productPrice,
                'quantity' => $productQuantity,
            ];
        }

        // Save the cart back to session
        session()->put('cart', $cart);

        return redirect()->route('cart.view')->with('success', 'Product added to cart successfully!');
    }

    // Remove item from cart
    public function removeFromCart(Request $request)
    {
        $productId = $request->input('id');

        // Get the cart from session
        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.view')->with('success', 'Product removed from cart successfully!');
    }

    // Update cart item quantity
    public function updateCart(Request $request)
    {
        $productId = $request->input('id');
        $productQuantity = $request->input('quantity');

        // Get the cart from session
        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $productQuantity;
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.view')->with('success', 'Cart updated successfully!');
    }
    public function clearCart()
{
    // Session থেকে 'cart' ডেটা মুছে ফেলুন
    session()->forget('cart');

    return redirect()->route('cart.view')->with('success', 'Cart has been cleared!');
}

}

