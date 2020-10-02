@extends('layouts.admin')

@section('header')
    <i class="fa fa-dashboard"></i> Dashboard
@endsection

@section('content')
    <div class="container-fluid table-responsive">
        <canvas id="myChart" style="width: 140vh; height:70vh"></canvas>
    </div>    
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Academic Registration Submissions', 'Boys Hostel Registration Submissions', 'Girls Hostel Registration Submissions', 'Repeat Exam Application Submissions'],
                datasets: [{
                    label: 'Count of Submissions',
                    data: [ {{ $academicsCount }}, {{ $boysHostelCount }} , {{ $girlsHostelCount }} , {{ $repeatsCount }} ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'                
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                    responsive: false,
                    maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
@endsection

