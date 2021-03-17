// $(function() {

//     var datascource = {
//       'name': 'DR. Rosiyati M. H. Thamrin, SE, MM',
//       'title': 'Ketua STIMIK',
//       'children': [
//         { 'name': 'Sariaty H. Y. Bey, SH., MM', 'title': 'Puket I', 'collapsed': true,
//           'children': [
//             { 'name': 'Li Jing', 'title': 'senior engineer', 'className': 'slide-up' },
//             { 'name': 'Li Xin', 'title': 'senior engineer', 'collapsed': true, 'className': 'slide-up',
//               'children': [
//                 { 'name': 'To To', 'title': 'engineer', 'className': 'slide-up' },
//                 { 'name': 'Fei Fei', 'title': 'engineer', 'className': 'slide-up' },
//                 { 'name': 'Xuan Xuan', 'title': 'engineer', 'className': 'slide-up' }
//               ]
//             }
//           ]
//         },
//         { 'name': 'Su Miao', 'title': 'department manager',
//           'children': [
//             { 'name': 'Pang Pang', 'title': 'senior engineer' },
//             { 'name': 'Hei Hei', 'title': 'senior engineer', 'collapsed': true,
//               'children': [
//                 { 'name': 'Xiang Xiang', 'title': 'UE engineer', 'className': 'slide-up' },
//                 { 'name': 'Dan Dan', 'title': 'engineer', 'className': 'slide-up' },
//                 { 'name': 'Zai Zai', 'title': 'engineer', 'className': 'slide-up' }
//               ]
//             }
//           ]
//         }
//       ]
//     };

//     $('#chart-container').orgchart({
//       'data' : datascource,
//       'nodeContent': 'title'
//     });

//   });
  google.charts.load('current', {packages:["orgchart"]});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Name');
    data.addColumn('string', 'Manager');
    data.addColumn('string', 'ToolTip');

    // For each orgchart box, provide the name, manager, and tooltip to show.
    data.addRows([
      [{'v':'DR. ROSIYATI M. H. THAMRIN, SE, MM', 'f':'DR. ROSIYATI M. H. THAMRIN, SE, MM<div style="color:red; font-style:italic">Ketua STIMIK</div>'},
       '', 'The President'],
      [{'v':'SARIATY H. Y. BEI, M.SI', 'f':'SARIATY H. Y. BEI, M.SI<div style="color:red; font-style:italic">PUKET I</div>'},
       'DR. ROSIYATI M. H. THAMRIN, SE, MM', 'PI'],
      [{'v':'HASMIATI MURSALIM, S.Si', 'f':'HASMIATI MURSALIM, S.Si<div style="color:red; font-style:italic">PUKET II</div>'},
      'DR. ROSIYATI M. H. THAMRIN, SE, MM', 'PII'],
      [{'v':'HERU SUTEJO, M.KOM', 'f':'HERU SUTEJO, M.KOM<div style="color:red; font-style:italic">PUKET III</div>'},
      'DR. ROSIYATI M. H. THAMRIN, SE, MM', 'PII'],
      [{'v':'JIM LAHALLO, M.M.S.I', 'f':'JIM LAHALLO, M.M.S.I<div style="color:red; font-style:italic">Kaprodi TI</div>'},
      'SARIATY H. Y. BEI, M.SI', 'TI'],
      [{'v':'EMY L. TATUHEY, M.M.S.I', 'f':'EMY L. TATUHEY, M.M.S.I<div style="color:red; font-style:italic">Kaprodi SI</div>'},
      'SARIATY H. Y. BEI, M.SI', 'SI']
    ]);

    // Create the chart.
    var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
    // Draw the chart, setting the allowHtml option to true for the tooltips.
    chart.draw(data, {'allowHtml':true});
  }