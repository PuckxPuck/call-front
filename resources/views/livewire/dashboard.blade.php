<section class="flex flex-wrap">
    <div class="stats shadow">

        <div class="stat place-items-center">
            <div class="stat-title">Total Calls</div>
            <div class="stat-value">{{ $totalCalls }}</div>
            <div class="stat-desc"></div>
        </div>

        <div class="stat place-items-center">
            <div class="stat-title">Total Calls for Today</div>
            <div class="stat-value ">{{ $todayCalls }}</div>
            <div class="stat-desc "></div>
        </div>

        <div class="stat place-items-center">
            <div class="stat-title">Calls not Tagged</div>
            <div class="stat-value">{{ $totalCalls - ($classCounts['physical'] + $classCounts['online']) }}</div>
            <div class="stat-desc"></div>
        </div>

    </div>
    <div>
        <canvas id="myChart"></canvas>
    </div>
</section>

<script>
import Chart from 'chart.js/auto';

const labels = [
    'Online',
    'Learning Center'
];

const data = {
    labels: labels,
    datasets: [{
        label: 'online',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [{{$onlineClassCount}}, {{$physicalClassCount}}],
    }]
};

const config = {
    type: 'line',
    data: data,
    options: {}
};

new Chart(
    document.getElementById('myChart'),
    config
);
</script>
