@extends('master')
@section('kalkulator')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post" name="form1">
                    @csrf
                    <table>
                        <tr>
                            <td colspan="4" class="header">KALKULATOR</td>
                        </tr>
                        <tr>
                            <td colspan="4"><input type="text" name="textfield" id=""></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="reset" style="background: #8b1717, #530000, #8b1717;" value="C"></td>
                            <td colspan="2"><input type="button" class="button" value="=" onclick="form1.textfield.value=eval(form1.textfield.value)"></td>
                        </tr>
                        <tr>
                            <td><input type="button" value="9" class="button" onclick="form1.textfield.value+='9'"></td>
                            <td><input type="button" value="8" class="button" onclick="form1.textfield.value+='8'"></td>
                            <td><input type="button" value="7" class="button" onclick="form1.textfield.value+='7'"></td>
                            <td><input type="button" class="opr" value="*" onclick="form1.textfield.value+='*'"></td>
                        </tr>
                        <tr>
                            <td><input type="button" value="6" class="button" onclick="form1.textfield.value+='6'"></td>
                            <td><input type="button" value="5" class="button" onclick="form1.textfield.value+='5'"></td>
                            <td><input type="button" value="4" class="button" onclick="form1.textfield.value+='4'"></td>
                            <td><input type="button" class="opr" value="/" onclick="form1.textfield.value+='/'"></td>
                        </tr>
                        <tr>
                            <td><input type="button" value="3" class="button" onclick="form1.textfield.value+='3'"></td>
                            <td><input type="button" value="2" class="button" onclick="form1.textfield.value+='2'"></td>
                            <td><input type="button" value="1" class="button" onclick="form1.textfield.value+='1'"></td>
                            <td><input type="button" class="opr" value="+" onclick="form1.textfield.value+='+'"></td>
                        </tr>
                        <tr>
                            <td><input type="button" class="button" value="0" onclick="form1.textfield.value+='0'"></td>
                            <td><input type="button" class="button" value="00" onclick="form1.textfield.value+='00'"></td>
                            <td><input type="button" class="button" value="000" onclick="form1.textfield.value+='000'"></td>
                            <td><input type="button" class="opr" value="-" onclick="form1.textfield.value+='-'"></td>
                        </tr>
                        <td class="footer" colspan="4">
                            <p>MISBAHUDIN ZAKI</p>
                            <p>XII PPLG 1</p>
                        </td>
                    </table>
                </form>
                <a href="{{route('home')}}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
@endsection
