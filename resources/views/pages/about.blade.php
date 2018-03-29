@extends('layouts.app')

@section('content')
    <h1>About</h1>
    <head>
        <style>
            table, td, th {
                border: 1px solid black;
            }

            table {
                border-collapse: collapse;
                width: 100%;
            }

            th {
                text-align: left;
            }
        </style>
    </head>
    <body>

    <h2>Students in this class</h2>

    <table>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
        </tr>
        <tr>
            <td>Adarsh</td>
            <td>Somireddygari</td>
            <td>23</td>
        </tr>
        <tr>
            <td>Hari</td>
            <td>Babu</td>
            <td>25</td>
        </tr>
        <tr>
            <td>Sharan</td>
            <td>Reddy</td>
            <td>22</td>
        </tr>
        <tr>
            <td>Arman</td>
            <td>Brown</td>
            <td>25</td>
        </tr>
    </table>

@endsection
