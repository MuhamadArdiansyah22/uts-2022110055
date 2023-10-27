@extends('layouts.template')

@section('title', 'transactions List')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>All transactions</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success mt-4">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container mt-3 mb-3">
        <div class="row">
            <!-- Card Balance -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-wallet" viewBox="0 0 16 16">
                            <path
                                d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
                        </svg>
                        <span>Total Balance: {{ $balance }}</span>
                    </div>
                </div>
            </div>

            <!-- Card Total Income -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cash-stack" viewBox="0 0 16 16">
                            <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                            <path
                                d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
                        </svg>
                        <span>Total Income: {{ $totalIncome }}</span>
                    </div>
                </div>
            </div>

            <!-- Card Total Expense -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cart-check" viewBox="0 0 16 16">
                            <path
                                d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                        <span>Total Expense: {{ $totalExpense }}</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-3">
                <div class="card">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg>
                        <span>Number of Income Transactions: {{ $numIncomeTransactions }}</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-3">
                <div class="card">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-dash-square-fill" viewBox="0 0 16 16">
                            <path
                                d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1z" />
                        </svg>
                        <span>Number of Expense Transactions: {{ $numExpenseTransactions }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('transactions.create') }}" class="btn btn-primary float-end mb-2">Tambah <svg
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
        </svg></a>
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">#</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Type</th>
                    <th scope="col">Category</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($transactions as $transaction)
                    <tr>
                        <th scope="row">{{ $transaction->id }}</th>
                        <td>
                            <a href="{{ route('transactions.show', $transaction) }}">
                                {{ $transaction->amount }}
                            </a>
                        </td>
                        <td>{{ $transaction->type }}</td>
                        <td>{{ $transaction->category }}</td>
                        <td>{{ Str::limit($transaction->notes, 50, ' ...') }}</td>
                        <td>{{ $transaction->created_at }}</td>
                        <td>{{ $transaction->updated_at }}</td>
                        <td>
                            <a href="{{ route('transactions.edit', $transaction) }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>
                            <form action="{{ route('transactions.destroy', $transaction) }}" method="POST"
                                class="d-inline-block">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No transactions found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $transactions->links() !!}
        </div>
    </div>
@endsection
