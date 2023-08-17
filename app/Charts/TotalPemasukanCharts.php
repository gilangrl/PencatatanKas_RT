<?php

namespace App\Charts;

use App\Models\Warga;
use App\Models\Pembayaran;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Http\Request as IlluminateRequest;

class TotalPemasukanCharts
{
    protected $chart;

    public function __construct(IlluminateRequest $request)
    {
        $this->request = $request;
    }

    public function build()
    {
        $this->chart = new LarapexChart();
        $warga = Warga::all();

        $data = [
            $warga->where('jenis_kelamin', 'Laki-laki')->count(),
            $warga->where('jenis_kelamin', 'Perempuan')->count(),
        ];

        $labels = [
            'Laki-laki',
            'Perempuan',
        ];

        return $this->chart->pieChart()
            ->setTitle('Data Laki & Perempuan')
            ->setSubtitle('Season 2023')
            ->addData($data)
            ->setWidth(500)
            ->setHeight(500)
            ->setColors(['#081693', '#05ad99'])
            ->setLabels($labels);
    }

    public function line(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $this->chart = new LarapexChart();

        $tahun = date('Y');

        $namaBulan = [
            'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
        ];

        $dataBulan = [];
        $dataTotalPembayaran = [];

        for ($i = 1; $i <= 12; $i++) {
            $total = Pembayaran::whereYear('created_at', $tahun)
                ->whereMonth('tanggal_pembayaran', $i)
                ->sum('jumlah');

            $dataBulan[] = $namaBulan[$i-1];
            $dataTotalPembayaran[] = $total;
        }

        return $this->chart->lineChart()
            ->setTitle('Data Pembayaran Tahun ' . $tahun)
            ->setSubtitle('Total Pembayaran Per Bulan')
            ->addData('Total Pembayaran', $dataTotalPembayaran)
            ->setHeight(380)
            ->setGrid('#3F51B5', 0.1)
            ->setMarkers(['#FF5722', '#E040FB'], 5)
            ->setXAxis($dataBulan); 

    }
}
