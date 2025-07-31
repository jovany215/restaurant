<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $sessionId = Session::getId();
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        $product = Product::findOrFail($productId);

        $cartItem = CartItem::firstOrCreate(
            ['session_id' => $sessionId, 'product_id' => $productId],
            ['unit_price' => $product->price]
        );

        $cartItem->quantity += $quantity;
        $cartItem->save();

        return response()->json(['message' => 'Produit ajouté']);
    }

    public function update(Request $request, $id)
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->quantity = $request->input('quantity');
        $cartItem->save();

        return response()->json(['message' => 'Quantité mise à jour']);
    }

    public function remove($id)
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();

        return response()->json(['message' => 'Produit supprimé']);
    }

    public function clear()
    {
        CartItem::where('session_id', Session::getId())->delete();

        return response()->json(['message' => 'Panier vidé']);
    }

    public function getTotal()
    {
        $cartItems = CartItem::where('session_id', Session::getId())->get();
        $total = $cartItems->sum(fn($item) => $item->quantity * $item->unit_price);
        $tax = $total * 0.10;
        $grandTotal = $total + $tax;

        return response()->json([
            'total' => number_format($total, 2),
            'tax' => number_format($tax, 2),
            'grand_total' => number_format($grandTotal, 2),
        ]);
    }
}