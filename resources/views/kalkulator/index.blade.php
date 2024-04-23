@extends('master')
@section('kalkulator')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <form action="{{route('hitung')}}" method="post">
                    @csrf
                    <table>
                        <tr>
                            <td colspan="4" class="header">KALKULATOR</td>
                        </tr>
                        <tr>
                            <td colspan="4"><input type="text" name="angka1" id=""></td>
                        </tr>
                        <tr>
                            <td colspan="4"><input type="text" name="angka2" id=""></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <select name="operator" class="operator">
                                    <option value="">---</option>
                                    <option value="kali">*</option>
                                    <option value="bagi">/</option>
                                    <option value="tambah">+</option>
                                    <option value="kurang">-</option>
                                </select>
                            </td>
                            <td><input type="submit" value="Hitung"></td>
                            <td><input type="submit" value="Reset" name="operator"></td>
                        </tr>
                        <tr>
                            <td colspan="4"><input type="text" name="hasil" value="" readonly></td>
                        </tr>
                        <tr>
                            <td class="footer" colspan="4">
                                <p>MISBAHUDIN ZAKI</p>
                                <p>XII PPLG 1</p>
                            </td>
                        </tr>
                    </table>
                </form>
                <a href="{{route('home')}}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
@endsection
