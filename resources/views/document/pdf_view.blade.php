<!DOCTYPE html>
<html>
<head>
  <style>
    .bt-h {
            border-top: hidden;
        }

        .bl-h {
            border-left: hidden;
        }

        .br-h {
            border-right: hidden;
        }

        .bb-h {
            border-bottom: hidden;
        }

    @page {
      size: A4 landscape;
      margin: 0;
    }

    body {
      margin: 0;
    }

    #container {
      display: flex;
    }

    #left-table,
    #right-table {
      width: 50%;
      box-sizing: border-box;
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 8px;
      border: 1px solid black;
    
    }

    @media print {
            .print-no-show {
                display: none;
            }
        }
  .print-icon {
            display: block;
        }

  </style>
</head>
<body>

  <div class="print-no-show report-toolbar">
    <div style="width:100%; text-align: right;">
        <button type="button" class="print-no-show" onClick="window.print();" style="height: 30px"><i class="fa fa-print" style=""></i> PRINT</button>
    </div>
</div>

<div id="print-icon" style="width: 786px; position: fixed; left: 50%; height: 0px; margin-top: 0px; margin-left: -393px;">
    <button type="button" class="print-no-show" onClick="window.print();" style="position: absolute; right: -430px; top: 20px; padding: 10px 15px; cursor: pointer;">
        <i class="fa fa-print" style="font-size: 50px; margin-bottom: 10px;"></i><br />
        PRINT
    </button>
</div>


  <div id="container" style="width: 1500px; margin: 0 auto;  font-family: Arial, sans-serif; font-size: 18px;">
    <div id="left-table">
      <table style="width: 710px">
        <thead>
          <tr style="text-align: center;">
            {{-- <td style="width: 80pt" class="br-h"><img src="/assets/images/dole_logo.png" class="dole-logo" width="110" /></td> --}}
            <td style="width: 80pt" class="br-h"></td>
            <td> <br>
                <b></b> <br>
                TANAUAN, LEYTE 
                 <br>
                 <br>
                 <br>
                <b>ROUTE SLIP</b>
                </td>
            <td style="width: 50pt" class="bl-h">{!! DNS2D::getBarcodeSVG("$data->document_code",'QRCODE',5,5) !!} <br> <b>{{ $data->document_code }}</b></td>
          </tr>
        </thead>
        <tbody>
          <tr style="height: 50pt">
            <td style="text-align: center;"><B>ORIGIN</B></td>
            <td style="white-space: pre-wrap;
            overflow: hidden;
            word-wrap: break-word;"> {{ $data->origin }}</td>
            <td>{{ $data->created_at }}</td>
          </tr>
          <tr style="height: 50pt">
            <td style="text-align: center;"><b>SUBJECT</b></td>
            <td colspan="2" style="white-space: pre-wrap;
            overflow: hidden;
            word-wrap: break-word;">{{ $data->subject }}</td>
          </tr>
          
          <table>
            <tbody>
              <tr>
                <td style="text-align: center; width: 80pt;" class="bt-h"><b>FROM</b></td>
                <td style="text-align: center; width: 200pt" class="bt-h"><b>TO</b></td>
                <td style="text-align: center;" class="bt-h"><b>ACTION REQUIRED/REMARKS</b></td>
              </tr>
              <tr>
                <td></td>
                <td>[&nbsp; &nbsp;] OfficeOfTheMayor <br>
                  [&nbsp; &nbsp;] HRSection <br>
                  [&nbsp; &nbsp;] PESOSection <br>
                  [&nbsp; &nbsp;] ITSection <br>
                  [&nbsp; &nbsp;] GSSection <br>
                  [&nbsp; &nbsp;] PropertyCustodianSection <br>
                  [&nbsp; &nbsp;] ProcurementSection <br>
                  [&nbsp; &nbsp;] PhilhealthSection <br>
                  [&nbsp; &nbsp;] MNAOSection <br>
                  [&nbsp; &nbsp;] TrafficEnforcementUnit <br>
                  [&nbsp; &nbsp;] AccountingOffice <br>
                  [&nbsp; &nbsp;] BudgetOffice <br>   
                  [&nbsp; &nbsp;] AgricultureOffice <br>
                  [&nbsp; &nbsp;] BantayDagatSection <br>
                  [&nbsp; &nbsp;] CivilRegistrarsOffice <br>
                  [&nbsp; &nbsp;] Planning&DevelopmentOffice<br>
                  [&nbsp; &nbsp;] MENRO <br>
                  [&nbsp; &nbsp;] MDRRMO <br>
                  [&nbsp; &nbsp;] HealthOffice <br>
                  [&nbsp; &nbsp;] BirthingFacilitySection <br>
                  [&nbsp; &nbsp;] SBOffice <br>
                  [&nbsp; &nbsp;] MSWDO <br>
                  [&nbsp; &nbsp;] OSCASection <br>
                  [&nbsp; &nbsp;] TreasurersOffice <br>
                  [&nbsp; &nbsp;] LicensingSection <br>
                  [&nbsp; &nbsp;] MarketSection <br>
                  [&nbsp; &nbsp;] SlaughterhouseSection <br>
                  [&nbsp; &nbsp;] EngineeringOffice <br>
                  [&nbsp; &nbsp;] ViceMayorsOffice <br>
                  ____________
                  <br>
                  </td>
                <td>[&nbsp; &nbsp;] Approval <br>
                  [&nbsp; &nbsp;] Endorse / Transmit <br>
                  [&nbsp; &nbsp;] Appropriate Action  <br>
                  [&nbsp; &nbsp;] Information / Guidance <br>
                  [&nbsp; &nbsp;] Draft reply / Acknowledgement <br>
                  
                      
                  [&nbsp; &nbsp;] Comment / Recommendation <br>
                  [&nbsp; &nbsp;] Attach to appropriate case folder <br>      
                  [&nbsp; &nbsp;] See to it we comply <br>
                  [&nbsp; &nbsp;] Go over if this is in order <br>
                  [&nbsp; &nbsp;] Handle this <br>
                  [&nbsp; &nbsp;] Facilitate <br>
                  [&nbsp; &nbsp;] Attend to this <br>
                  [&nbsp; &nbsp;] File <br>
                  [&nbsp; &nbsp;] Disseminate <br>
                
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  </td>
              </tr>
            </tbody>
          </table>
        </tbody>
      </table>
      <br>
      To track and trace your document, please visit at <strong style="color: rgb(0, 150, 255);">dtstanauan.online/public/</strong>
    </div>
    <div id="right-table">
      <table>
        <thead>
          <tr style="text-align: center; height: 110pt" >
            <td style="width: 80pt" class="br-h"></td>
            {{-- <td style="width: 80pt" class="br-h"><img src="/assets/images/dole_logo.png" class="dole-logo" width="110" /></td> --}}
            <td><br>
                <b></b> <br>
                TANAUAN, LEYTE 
                 <br>
                 <br>
                 <br>
                <b>DOCUMENT TRACKING SLIP</b>
                </td>
                <td class="bl-h"></td>
          </tr>
        </thead>
        <tbody>
          <tr style=" height: 220pt">
            <td colspan="3" style="text-align: center;">
              {!! DNS2D::getBarcodeSVG("$data->document_code",'QRCODE',10,10) !!} <br> <b>{{ $data->document_code }}</b>
            </td>
          </tr>
          <tr style="height: 50pt">
            <td style="text-align: center;"><B>ORIGIN</B></td>
            <td style="white-space: pre-wrap;
            overflow: hidden;
            word-wrap: break-word;">{{ $data->origin }}</td>
            <td>{{ $data->created_at }}</td>
          </tr>
          <tr style="height: 70pt">
            <td style="text-align: center;"><b>SUBJECT</b></td>
            <td colspan="2" style="white-space: pre-wrap;
            overflow: hidden;
            word-wrap: break-word;">{{ $data->subject }}</td>
          </tr>
        </tbody>
      </table>
      <br>
      To track and trace your document, please visit at <strong style="color: rgb(0, 150, 255);">dtstanauan.online/public/</strong>
    </div>
  </div>
</body>
</html>
