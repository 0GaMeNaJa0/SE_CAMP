@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
<form class="w-50">
    <div class="w-auto p-5">
        <div class="d-flex flex-column form-group">
            <label for="fname">ชื่อ</label>
            <input type="text" name="fname" placeholder="Enter Name">
        </div>
        <div class="d-flex flex-column form-group">
            <label for="lname">สกุล</label>
            <input type="text" name="lname" placeholder="Enter Surname">
        </div>
        <div class="d-flex flex-column form-group">
            <label for="date">วัน/เดือน/ปีเกิด</label>
            <input type="datetime-local" name="date">
        </div>
        <div class="d-flex flex-column form-group">
            <label for="age">อายุ</label>
            <input type="text" name="age" placeholder="Enter Age">
        </div>
        <div class="d-flex my-2 form-group">
            <label for="gender">เพศ</label>
            <div class="mx-4">
                <input class="mr-1" type="radio" value="ชาย">
                <label for="ชาย">ชาย</label>
            </div>
            <div>
                <input class="mr-1" type="radio" value="หญิง">
                <label for="หญิง">หญิง</label>
            </div>
        </div class="form-group">
        <div class="d-flex flex-column w-50">
            <input type="file" name="uploadfile" id="img" placeholder="Browse File" />
            <label class="file-browse" for="img">คลิกที่นี่เพื่อเลือกรูปภาพ</label>
        </div>
        <div class="d-flex flex-column form-group">
            <label for="address">ที่อยู่</label>
            <textarea name="" id="" cols="8" rows="6" placeholder="Enter ..."></textarea>
        </div>
        <div class="form-group d-flex flex-column w-50">
            <label for="color">สีที่ชอบ</label>
            <select name="colors" id="">
                <option value="">สีแดง</option>
                <option value="">สีส้ม</option>
                <option value="">สีเขียว</option>
                <option value="">สีชมพู</option>
            </select>
        </div>
        <div class="form-group d-flex">
            <label for="music">แนวเพลงที่ชอบ</label>
            <div class="ml-4">
                <input class="mr-1" type="radio" value="เพื่อชีวิต">
                <label for="เพื่อชีวิต">เพื่อชีวิต</label>
            </div>
            <div class="ml-4">
                <input class="mr-1" type="radio" value="ลูกทุ่ง">
                <label for="ลูกทุ่ง">ลูกทุ่ง</label>
            </div>
            <div class="ml-4">
                <input class="mr-1" type="radio" value="อื่นๆ">
                <label for="อื่นๆ">อื่นๆ</label>
            </div>
        </div>

        <div class="form-group">
            <input type="checkbox" class="mr-1">
            <label for="accept">ยินยอมให้เก็บข้อมูล</label>
        </div>
        <div class="form-group d-flex justify-content-between">
            <input class="btn btn-primary" type="submit" value="Submit">
            <input class="btn btn-danger" type="reset" value="Reset">
        </div>
    </div>
</form>

@endsection
