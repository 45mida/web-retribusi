@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Rincian Ajuan SPORD</h1>
</div>

<div class="row">
    <div class="container col-md-12">
        <div class="float-end">
            <button type="button" class="btn btn-warning" onclick="PrintDiv()"><span data-feather="printer"></span> Cetak</button>
            <button type="button" class="btn btn-danger" onclick="window.close();"><span data-feather="x-circle"></span></button>
        </div>
        <div class="tab-content d-flex justify-content-center">
            <link rel="stylesheet" type="text/css" href="/css/stylesheet_spord.css">
            <div id="dataSPORD" class="pt-3 pb-2 mt-3 mb-5">
                <table border=0 cellpadding=0 cellspacing=0 width=732 style='border-collapse:
                    collapse;table-layout:fixed;width:550pt'>
                    <col class=xl66 width=8 style='mso-width-source:userset;mso-width-alt:292;
                    width:6pt'>
                    <col class=xl66 width=205 style='mso-width-source:userset;mso-width-alt:7497;
                    width:154pt'>
                    <col class=xl66 width=158 span=2 style='mso-width-source:userset;mso-width-alt:
                    5778;width:119pt'>
                    <col class=xl66 width=203 style='mso-width-source:userset;mso-width-alt:7424;
                    width:152pt'>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl95 width=8 style='height:19.5pt;width:6pt; border-top:.5pt solid black; border-left:.5pt solid black'>&nbsp;</td>
                    <td colspan=2 class=xl96 width=363 style='border-right:.5pt solid black; border-top:.5pt solid black;
                    width:273pt;'>PEMERINTAH PROVINSI KALIMANTAN BARAT</td>
                    <td class=xl88 width=158 style='border-left:none;width:119pt; border-top:0.5pt solid black'><span
                    style='mso-spacerun:yes'> </span>&nbsp;&nbsp;Nomor</td>
                    <td class=xl89 width=203 style='width:152pt; border-top:.5pt solid black; border-right:0.5pt solid black'>:</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl74 style='height:19.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=2 rowspan=2 class=xl65 style='border-right:.5pt solid black;
                    border-bottom:.5pt solid black; vertical-align: top;'>DINAS / UNIT : {{ $dataspord->kelola->judul }}</td>
                    <td class=xl90 style='border-left:none'><span
                    style='mso-spacerun:yes'> </span>&nbsp;&nbsp;Masa Retribusi</td>
                    <td class=xl91 style="border-right:0.5pt solid black">:</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl67 style='height:19.5pt; border-bottom:.5pt solid black; border-left:0.5pt solid black'>&nbsp;</td>
                    <td class=xl100 style='border-left:none; border-bottom:.5pt solid black'><span
                    style='mso-spacerun:yes'> </span>&nbsp;&nbsp;Tahun Retribusi</td>
                    <td class=xl101 style="border-bottom:.5pt solid black; border-right:0.5pt solid black">: {{ $dataspord->created_at->isoFormat('Y') }}</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td colspan=5 height=26 class=xl102 style='border-right:.5pt solid black; border-left:0.5pt solid black;
                    font-size:14.5pt; text-align: center'><strong>SURAT PENDAFTARAN OBJEK RETRIBUSI DAERAH ( SPdORD )</strong></td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td colspan=5 height=26 class=xl76 style='border-right:.5pt solid black; border-left:0.5pt solid black;
                    font-size:14.5pt; text-align: center'><strong>PERMOHONAN</strong></td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td colspan=5 height=26 class=xl68 style='border-right:.5pt solid black; border-left:0.5pt solid black;
                    height:19.5pt'>&nbsp;</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td colspan=3 rowspan=5 height=130 class=xl68 style='border-bottom:.5pt solid black;
                    height:97.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=2 class=xl65 style='border-right:.5pt solid black'>Kepada Yth. :</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td colspan=2 height=26 class=xl65 style='border-right:.5pt solid black;
                    height:19.5pt'>Kepala {{ $dataspord->kelola->judul }}</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td colspan=2 height=26 class=xl65 style='border-right:.5pt solid black;
                    height:19.5pt'>Di</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td colspan=2 rowspan=2 height=52 class=xl65 style='border-right:.5pt solid black;
                    height:39.0pt; border-bottom:.5pt solid black'><span style='mso-spacerun:yes'>                  
                    </span>KALIMANTAN BARAT</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl75 style='height:19.5pt;border-top:none; border-bottom:.5pt solid black; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=4 class=xl81 style='border-right:.5pt solid black; border-bottom:.5pt solid black'>A. Identitas
                    Wajib Retribusi</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td colspan=5 height=26 class=xl71 style='border-right:.5pt solid black; border-left:0.5pt solid black;
                    height:19.5pt'>&nbsp;</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl90 colspan=2 style='height:19.5pt;mso-ignore:colspan; border-left:0.5pt solid black'><span
                    style='mso-spacerun:yes'>       </span>&nbsp;&nbsp;&nbsp;1. Nama Pemilik</td>
                    <td colspan=3 class=xl65 style='border-right:.5pt solid black'>: {{ $dataspord->nama }}</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl90 colspan=2 style='height:19.5pt;mso-ignore:colspan; border-left:0.5pt solid black'><span
                    style='mso-spacerun:yes'>       </span>&nbsp;&nbsp;&nbsp;2. Nama Badan / Perusahaan</td>
                    <td colspan=3 class=xl65 style='border-right:.5pt solid black'>: {{ $dataspord->organisasi }}</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl90 colspan=2 style='height:19.5pt;mso-ignore:colspan; border-left:0.5pt solid black'><span
                    style='mso-spacerun:yes'>       </span>&nbsp;&nbsp;&nbsp;3. Alamat Perusahaan</td>
                    <td colspan=3 class=xl65 style='border-right:.5pt solid black'>: {{ $dataspord->alamat }}</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl90 colspan=2 style='height:19.5pt;mso-ignore:colspan; border-left:0.5pt solid black'><span
                    style='mso-spacerun:yes'>       </span>&nbsp;&nbsp;&nbsp;4. Lokasi Kegiatan</td>
                    <td colspan=3 class=xl65 style='border-right:.5pt solid black'>: {{ $dataspord->lokasi }}</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl67 style='height:19.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=4 class=xl79 style='border-right:.5pt solid black'>&nbsp;</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl75 style='height:19.5pt;border-top:none; border-bottom:.5pt solid black; border-top:.5pt solid black; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=4 class=xl83 style='border-right:.5pt solid black; border-bottom:.5pt solid black; border-top:.5pt solid black;'>B. Jenis
                    Permohonan</td>
                    </tr>
                    <tr height=10 style='mso-height-source:userset;height:7.5pt'>
                    <td height=10 class=xl74 style='height:7.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=4 class=xl94 style='border-right:.5pt solid black;'></td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl74 style='height:19.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=4 class=xl65 style='border-right:.5pt solid black'><span
                    style='mso-spacerun:yes'>    </span>&nbsp;&nbsp;&nbsp;1. {{ $dataspord->objek1 }}<span
                    style='mso-spacerun:yes'>  </span></td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl74 style='height:19.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=4 class=xl65 style='border-right:.5pt solid black'><span
                    style='mso-spacerun:yes'>    </span>&nbsp;&nbsp;&nbsp;2. {{ $dataspord->objek2 }}<span
                    style='mso-spacerun:yes'>  </span></td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl74 style='height:19.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=4 class=xl65 style='border-right:.5pt solid black'><span
                    style='mso-spacerun:yes'>    </span>&nbsp;&nbsp;&nbsp;3. {{ $dataspord->objek3 }}<span
                    style='mso-spacerun:yes'>  </span></td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl74 style='height:19.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=4 class=xl65 style='border-right:.5pt solid black'><span
                    style='mso-spacerun:yes'>    </span>&nbsp;&nbsp;&nbsp;4. {{ $dataspord->objek4 }}</td>
                    </tr>
                    <tr height=10 style='mso-height-source:userset;height:7.5pt'>
                    <td height=10 class=xl74 style='height:7.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=4 class=xl65 style='border-right:.5pt solid black'></td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl75 style='height:19.5pt; border-bottom:.5pt solid black; border-top:.5pt solid black; border-left:0.5pt solid black'>&nbsp;</td>
                    <td class=xl98 style="border-bottom:.5pt solid black; border-top:.5pt solid black">C. Berlaku Sampai</td>
                    <td colspan=3 class=xl83 style='border-right:.5pt solid black; border-bottom:.5pt solid black; border-top:.5pt solid black'>:</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl75 style='height:19.5pt;border-top:none; border-bottom:.5pt solid black; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=4 class=xl83 style='border-right:.5pt solid black; border-bottom:.5pt solid black'>D. Obyek
                    Retribusi yang diminta<span style='mso-spacerun:yes'>  </span>: (diisi oleh
                    petugas)</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl74 style='height:19.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=4 class=xl65 style='border-right:.5pt solid black'></td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl74 style='height:19.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=4 rowspan=2 class=xl65 style='border-right:.5pt solid black'><span
                    style='mso-spacerun:yes'>   </span>&nbsp;&nbsp;&nbsp;1.<span style='mso-spacerun:yes'> </span></td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl74 style='height:19.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl74 style='height:19.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=4 rowspan=2 class=xl65 style='border-right:.5pt solid black'><span
                    style='mso-spacerun:yes'>   </span>&nbsp;&nbsp;&nbsp;2.<span style='mso-spacerun:yes'> </span></td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl74 style='height:19.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl74 style='height:19.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=4 rowspan=2 class=xl65 style='border-right:.5pt solid black'><span
                    style='mso-spacerun:yes'>   </span>&nbsp;&nbsp;&nbsp;3.<span style='mso-spacerun:yes'> </span></td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl74 style='height:19.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
                    <td height=26 class=xl74 style='height:19.5pt; border-left:0.5pt solid black'>&nbsp;</td>
                    <td colspan=4 rowspan=2 class=xl65 style='border-right:.5pt solid black;
                    border-bottom:.5pt solid black'><span style='mso-spacerun:yes'>  
                    </span>&nbsp;&nbsp;&nbsp;4.<span style='mso-spacerun:yes'> </span></td>
                    </tr>
                    <tr height=26 style='mso-height-source:userset;height:19.5pt; border-left:0.5pt solid black'>
                    <td height=26 class=xl67 style='height:19.5pt;border-bottom:.5pt solid black'>&nbsp;</td>
                    </tr>
                    <tr height=17 style='height:12.75pt'>
                    <td height=17 class=xl66 style='height:12.75pt'></td>
                    <td class=xl66></td>
                    <td class=xl66></td>
                    <td class=xl66></td>
                    <td class=xl66></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl66 style='height:15.0pt'></td>
                    <td colspan=4 rowspan=3 class=xl85 width=724 style='width:544pt'>Dengan
                    menyadari sepenuhnya akan menanggung penggantian segala biaya-biaya yang
                    diakibatkan pemeriksaan dan<span style='mso-spacerun:yes'> 
                    </span>persyaratan -persyaratan administrasi termasuk sanksi-sanksi sesuai
                    dengan ketentuan perundang-undangan yang berlaku terhadap saya atau yang saya
                    beri kuasa.</td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl66 style='height:15.0pt'></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl66 style='height:15.0pt'></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                    <td height=20 class=xl66 style='height:15.0pt'></td>
                    <td colspan=4 style='mso-ignore:colspan'></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                    <td height=20 class=xl66 style='height:15.0pt'></td>
                    <td colspan=2 style='mso-ignore:colspan'></td>
                    <td colspan=2 class=xl65 style="text-align: center" ><span style='mso-spacerun:yes'>    
                    </span>Pontianak, {{ $dataspord->created_at->isoFormat('DD MMMM Y') }}</td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                    <td height=20 class=xl66 style='height:15.0pt'></td>
                    <td colspan=2 style='mso-ignore:colspan'></td>
                    <td class=xl66></td>
                    <td class=xl66></td>
                    </tr>
                    <tr height=17 style='height:12.75pt'>
                    <td height=17 class=xl66 style='height:12.75pt'></td>
                    <td class=xl66></td>
                    <td class=xl66></td>
                    <td class=xl66></td>
                    <td class=xl66></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                    <td height=20 class=xl66 style='height:15.0pt'></td>
                    <td class=xl66></td>
                    <td class=xl66></td>
                    <td colspan=2 class=xl99 style="text-align: center">{{ $dataspord->nama }}</td>
                    </tr>
                    <![if supportMisalignedColumns]>
                    <tr height=0 style='display:none'>
                    <td width=8 style='width:6pt'></td>
                    <td width=205 style='width:154pt'></td>
                    <td width=158 style='width:119pt'></td>
                    <td width=158 style='width:119pt'></td>
                    <td width=203 style='width:152pt'></td>
                    </tr>
                    <![endif]>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('dataSPORD');
        var popupWin = window.open('', '', 'width=1920,height=1080');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>
@endsection