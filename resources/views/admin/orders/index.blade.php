@extends('layouts.admin')

@section('title', 'Manage Orders')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Orders List</h2>

        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Queue No.</th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Customer Name</th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Main Package</th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Nasi Box Package</th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Nasi Box Qty</th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Total Price</th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Checked Out At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $order->queue_number }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $order->customer_name }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $order->package->name ?? 'N/A' }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $order->nasiBoxPackage->name ?? 'N/A' }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $order->nasi_box_qty }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">Rp {{ number_format($order->total_price, 2, ',', '.') }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $order->checked_out_at ? $order->checked_out_at->format('d M Y H:i') : 'N/A' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-4 text-center text-gray-500">No orders found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection