var counter = function(target, data) {
    d3.selectAll(target)
      .html(data);
};

var donut = function(target, data) {
    c3.generate({
        bindto: target,
        data: {
            columns: data,
            type: 'donut'
        },        
        donut: { width: 50 }
    });
};

var line = function(target, nameX, nameY, dataX, dataY, showLegend) {
    c3.generate({
        bindto: target,
        padding: {
            right: 20,
        },
        data: {
            x: nameX,
            xFormat: '%m/%d/%Y',
            columns: [
                dataX,
                dataY
            ]
        },
        axis: {
            x: {
                type: 'timeseries',
                tick: {
                    format: '%m/%d/%Y',
                    culling: {
                        max: 4
                    }
                }
            }
        },
        legend: {
            show: showLegend
        },
        zoom: {
            enabled: true
        }
    });
};

var bars = function(target, dataX, dataY, showLegend, rotated) {
    c3.generate({
        bindto: target,
        data: {
            columns: [
                dataX
            ],
            type: 'bar'
        },
        bar: {
            width: {
                ratio: 0.5
            }
        },
        axis: {
            x: {
                type: 'category',
                categories: dataY
            },
            rotated: rotated
        },
        legend: {
            show: showLegend
        },
        zoom: {
            enabled: true
        }
    });
};

var table = function(target, data) {
    var table = d3.select(target)
                  .append('table')
                  .classed('cards-table', true);

    var thread = table.append('thead').append('tr');

    var tbody = table.append('tbody');

    thread.selectAll('th')
          .data(d3.map(data[0]).keys())
          .enter()
          .append('th')
          .text(function(d){ return d; });

    var tr = tbody.selectAll('tr')
                  .data(data)
                  .enter()
                  .append('tr');

    var td = tr.selectAll('td')
               .data(function(d, i) { return Object.values(d); })
               .enter()
               .append("td")
               .text(function(d) { return d; });
};