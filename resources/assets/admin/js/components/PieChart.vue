<template>
  <div class="graph-container">
    <canvas id="graph" ref="graph" />
  </div>
</template>

<script>
export default {
  props: {
    labels: {
      type: Array,
      required: true
    },
    values: {
      type: Array,
      required: true
    },
    bgColors: {
      type: String,
      required: true
    },
    hoverBgColors: {
      type: String,
      required: true
    }
  },

  mounted () {
    let context = this.$refs.graph.getContext('2d')

    let options = {
      responsive: true,
      maintainAspectRatio: false
    }

    let data = {
      labels: this.labels,
      datasets: [
        {
          data: this.values,
          backgroundColor: this.bgColors,
          hoverBackgroundColor: this.hoverBgColors
        }
      ]
    }

    let myPieChart = new Chart(context, {
      type: 'pie',
      data: data,
      options: options
    })
  }
}
</script>

<style>
.graph-container {
  height: 300px;
}
</style>
