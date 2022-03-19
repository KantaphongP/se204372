<!DOCTYPE html>
<html>
<style>
    body {
        background:#ddd;
        font-family: 'Noto Sans Thai', sans-serif;
    }
    .center {
        margin-left: auto;
        margin-right: auto;
    }
    .popup {
        width: 30%;
        height: 33%;
        padding: 30px 20px;
        background: #f5f5f5;
        border-radius: 10px;
        box-sizing:border-box;
        z-index:2;
        text-align:center;
        position: absolute;
  top: 20%;
  left: 50%;
transform: translate(-50%,-50%);
    }
    .popup .icon {
        margin: 5px 0px;
        width: 50px;
        height: 50px;
        border: 5px solid #385A64;
        text-align:center;
        display:inline-block;
        border-radius: 50%;
        line-height:100px;
    }
    .popup .icon {
        font-size: 50px;
        color:#385A64;
    }
    .popup .title {
        margin:5px 0px;
        font-size:30px;
        padding: 5px;
    }
    .popup .description {
        color:#222;
        font-size: 15px;
        padding: 5px;
    }
    
    .popup .back-btn {
      position: absolute;
      top:80%;
      left:55%;

    }
    .popup .back-btn button {
        padding: 7px 10px;
        background: #FF735C;
        color: #000;
        border: 2px solid #000;
        font-size: 12px;
        font-weight: 600;
        outline:none;
        border-radius: 50px;
        cursor: pointer;
        transition: all 300ms ease-in-out;
    }
    .popup .back-btn button:hover {
        color: #FF735C;
        background: #FFF;
        border: 2px solid #FF735C;
    }
    .popup .delete-btn {
      position: absolute;
      top:80%;
      left:30%;
    }
    .popup .delete-btn button {
        padding: 7px 10px;
        background: #FF735C;
        color: #000;
        border: 2px solid #000;
        font-size: 12px;
        font-weight: 600;
        outline:none;
        border-radius: 50px;
        cursor: pointer;
        transition: all 300ms ease-in-out;
    }
    .popup .delete-btn button:hover {
        color: #FF735C;
        background: #FFF;
        border: 2px solid #FF735C;
    }
</style>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
</head>
    <div class="popup center">
        <div class="icon">
            <i class="fa fa-remove"></i>
        </div>
        <div class="title">
            Delete
        </div>
        <div class="description">
            <?php echo "Are you sure to delete this company<br>
            $company->name_c <br>";?>
        </div>
        <div class="b">
          <div class="back-btn ">
            <button type="submit" name="action" value="index">back</button>
        </div>
        <div class="delete-btn">
            <button type="submit" name="action" value="delete">delete</button>
        </div>
        </div>
        
    </div>


<form method="get" action="">
    <input type="hidden" name="controller" value="company"/>
    <input type="hidden" name="id_c" value="<?php echo $company->id_c;?>"/>
    <input type="hidden" name="id_l" value="<?php echo $lecturer->id_l;?>"/>
    
    
</form>
</html>
           