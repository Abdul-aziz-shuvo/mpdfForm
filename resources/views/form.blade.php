<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
    <style>
        .form-group {
            display: flex
        }
    </style>
</head>
<body>
    <form> 

        <div class="w-full max-w-xs">
            <div>
                <img src="{{ public_path('/meta.png') }}" alt="" style="width: 80px">
            </div>
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
              <div class="form-group">

                <div style="margin: 10px; ">
                    <label for="">Name : </label>
                    <input type="text" name="name" style="width: 100px">
                </div>

                <div style="margin: 10px">
                    <label for="">Email : </label>
                    <input type="text" name="email" style="width: 100px">
                </div>

                <div style="margin: 10px ; position: relative; z-index: 2;">
                    <label for="">Country : </label>
                    <select name="country" id=""  size="1">
                        <option value="">Select Country</option>
                        <option value="canada">Canada</option>
                        <option value="africa">Africa</option>
                        <option value="n_zeland">New Zeland</option>
                        <option value="australia">Austrlia</option>
                        <option value="denmark">Denmark</option>
                        <option value="usa">USA</option>
                    </select>
                </div>

                <div style="margin: 10px">
                    <label for="">Gender : </label>
                    <input type="radio" name="gender" id="" value="m">  Male
                    <input type="radio" name="gender" id="" value="f">  Female
                    
                </div>


                <div style="margin: 10px">
                    <label for="">Date : </label>
                    <input type="date" name="date">
                </div>

                <div style="margin: 10px">
                    <label for="">Hobby : </label>
                    <input type="checkbox" name="hobby" checked="checked" id="1" value="football"> Football
                    <input type="checkbox" name="hobtt"  id="2" value="football"> Football
                    <input type="checkbox" name="hob"  id="3" value="football"> Football
                    <input type="checkbox" name="ho"  id="4" value="football"> Football
                </div>

                <div style="margin : 20px"> 
                    <label for="">Descriptioin:</label>
                    <textarea name="desc" id="" cols="30" rows="10"> &nbsp;</textarea>
                </div>

                
                 
              </div>
              
            </form>
            
          </div>

    </form>
</body>
</html>