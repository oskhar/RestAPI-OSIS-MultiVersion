<template>
  <VRow>
    <VCol cols="12">
      <VCard>
        <VueApexCharts
          class="float-center"
          :options="chartOptions"
          :series="series"
          height="250"
        />
      </VCard>
    </VCol>
  </VRow>
</template>

<script>
import VueApexCharts from "vue3-apexcharts";

export default {
  components: {
    VueApexCharts,
  },
  data() {
    return {
      chartOptions: {
        chart: {
          type: "bar",
        },
        plotOptions: {
          bar: {
            barHeight: "70%",
            distributed: true,
            horizontal: true,
            dataLabels: {
              position: "bottom",
            },
          },
        },
        colors: ["rgb(113, 221, 55)", "rgb(105, 108, 255)", "rgb(3, 195, 236)"],
        // rgb(255, 62, 29)
        dataLabels: {
          enabled: true,
          textAnchor: "start",
          style: {
            colors: ["#fff"],
          },
          formatter: function (val, opt) {
            return opt.w.globals.labels[opt.dataPointIndex] + ":  " + val;
          },
          offsetX: 0,
          dropShadow: {
            enabled: true,
          },
        },
        xaxis: {
          categories: ["Wahyu", "Udin", "Salem"],
        },
        yaxis: {
          labels: {
            show: false,
          },
        },
        title: {
          text: "Hasil Pemilihan Ketua OSIS",
          align: "center",
          floating: true,
        },
        tooltip: {
          theme: "dark",
          x: {
            show: false,
          },
        },
      },
      series: [
        {
          name: "Jumlah Suara",
          data: [100, 200, 150], // Data suara untuk Wahyu, Udin, dan Salem
        },
      ],
    };
  },
};
</script>
