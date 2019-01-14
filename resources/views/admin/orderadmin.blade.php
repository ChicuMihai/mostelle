@extends('admin.layouts.app')

@section('title', 'Order')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">  
                    <div class="ibox-content">
                           
                  
                    <table   class="table table-striped table-bordered table-hover dataTables-example dataTable" id="headerTable">
                                          <tr>
                           
                            <th>Status  </th>
                            <th>Compania  </th>
                            <th>Nume  </th>
                            <th>Prenume  </th>
                            <th>Telefon  </th>
                            <th>Email  </th>
                            <th>Raion  </th>
                            <th>Localitate  </th>
                            <th>Produs  </th>
                            <th>Cantitate  </th>
                            <th>Ambalaj  </th>
                            <th>Detalii  </th>
                            <th>Data  </th>

                            </tr>
                            @foreach($test as $first)
                                            <tr>
                              
                                <td>{{$first['tippersoana']}}</td>
                                <td>{{$first['compania']}}</td>
                                <td>{{$first['nume']}}</td>
                                <td>{{$first['prenume']}}</td>
                                <td>{{$first['telefon']}}</td>
                                <td>{{$first['email']}}</td>
                                <td>{{$first['raion']}}</td>
                                <td>{{$first['localitate']}}</td>
                                <td>{{$first['produs']}}</td>
                                <td>{{$first['cantitate']}}</td>
                                <td>{{$first['ambalaj']}}</td>
                                <td>{{$first['detalii']}}</td>
                                <td>{{$first['created_at']}}</td>
                                     </tr>
                            @endforeach
                                      </table>
                                      <a class="btn btn-default buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_0"onclick="fnExcelReport();" href="#"><span>Exporteaza in Excel</span></a>
                    

                    </div>
                    </div>
                </div>
            </div>
           <script>
               function fnExcelReport()
{
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('headerTable'); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xlsx");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}
           </script>

            
        <style>
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>

@endsection

