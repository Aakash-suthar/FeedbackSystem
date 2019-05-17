<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Import Faculty</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
<div class="container-fluid">
        <div class="col-sm-6">
            <div align="center">
                <div class="form-group col-sm-12" style="padding:12px">
                    <div class="col-sm-6">
                    <form id="importform"  action="{{ url('dashboard/importf') }}" style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" class="form-horizontal" method="post" enctype="multipart/form-data">
                        {!! Form::token() !!}
                        <input type="file" name="importfile" id="importfile" required/>
                        <button style="margin-top:10px" class="btn btn-primary">Import Faculty Excel File</button>
                    </form>
                </div>
                <div align="center">
                        <span id="successimport" class="text-success"></span>
                        <span id="dangerimport" class="text-danger"></span>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <p>1. Excel file should have anhy extra row above or below the rows that contains faculty value.</p>
            <br>
            <p>2. Excel file should have column name as id, name, email, phnoneno, course_id as course</p>
            <br>
            <p>3. Excel file should not have any column value as null.</p>
            <br>
            <p>4. Excel file should have .xls extension only.</p>

        </div>
    </div>
    </body>
</html>