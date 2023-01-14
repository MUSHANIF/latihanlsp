
<table class="table mt-3" cellpadding="10" cellspace="0">
  
   
    <thead class="align-self-center text-center">
        <tr>
            <th colspan="12" class="text-center"><h2 style="align-content: center">Data transaksi</h2></th>
        </tr>
        <tr>

            <th colspan="3">Nama pembeli</th>
         <th colspan="3">Nama layanan</th>
         <th colspan="3" >Metode pembayaran</th>
         <th colspan="2" >Jumlah</th>
         <th colspan="2">Total bayar</th>
    </tr>
        
    </thead>
   
    @foreach ($datas as $key) 
    <tbody>
        <tr class="align-self-center text-center"  style="border: 1px solid black;">
            <th colspan="3">{{ $key->transaksiuser->name }}</th>
            <td colspan="3" >{{ $key->transaksi->name }}</td>
            <td colspan="3">{{ $key->metode_pembayaran }}</td>
            <td colspan="2">{{ $key->jumlah }}</td>
            <td colspan="2">Rp. {{number_format($key->bayar, 0, '', '.') }}</td>
 
            
        
        </tr>
    </tbody>
    @endforeach
   

</table>