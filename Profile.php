<?php
require ("config.php");
// require("db.php");
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result =  mysqli_query($con,"SELECT * FROM tb_user WHERE id ='$id' ");
    $row= mysqli_fetch_assoc($result);

}
else{
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
    <style>
        .container{
            background-color:orangered;
        }
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'poppins',sans-serif;

        }
        .container1{
            width:100%;
            height:100vh;
            /* background-image:url("background.jpg");
           
            background-size:cover;
            background-position:center; */
            background-color:gray;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .profile-box{
            /* font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif; */
            font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
        font-weight: 900;
        font-size: 25px;
        /* font-style:italic; */
            /* font-style:italic; */
            /* font-size:30px; */
            color:black;
            /* font-weight:600; */
            /* background-color:rgb(255, 85, 0); */
            background-color:#b420e6;
            /* background-color:rgb(66, 236, 4); */
            text-align:center;
            width:400px;
            height:500px;
            border-radius:20px;
            -webkit-box-shadow: 6px 0px 14px 8px rgba(107,89,122,1);
-moz-box-shadow: 6px 0px 14px 8px rgba(107,89,122,1);
box-shadow: 6px 0px 14px 8px rgba(107,89,122,1);
            
        }
        img{
            margin-top:40px;
            border-radius:20px;
           
        }
        .pro{
            /* width:50px;
            height:50px; */
            background-color:#524352;
            border-radius:20px;
            
        }
        a{
            list-style:none;
            text-decoration:none;
            color:black;
            background-color:green;
            margin-top:10px;
            border-radius:10px;
            padding:10px ;
        }
    </style>
</head>

<body> 
<div class="main">
    <div class="container">
      <div class="navbar">
        <h2><i>.Beka</i></h2>
        <ul>
        <li>
            <a href="landing.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="skills.php">SKILLS</a></li>
            <li><a href="services.php">Services</a></li>
            
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="profile.php">Profile</a></li>
        </ul>
      </div>
    <div class="container1">
        <div class="pro">
        <div class="profile-box">
            <form action="uploaded.php" method="post" enctype = "multipart/form-data"
            >
            <input type="file" name = "pro">
            <input type="submit">
        </form>

            <!-- <img width="50"class="menu" height="50" src="https://img.icons8.com/ios/50/menu--v1.png" >
            <img width="50" height="50" src="https://img.icons8.com/ios/50/settings--v1.png" alt="settings--v1"/> -->
        <!-- <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8QEBAPDw8PDw8QDw8QDxUVEBAXEBAQFRUWFxYVFhUYHSggGBonHRgVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OFxAQFS0gHyUtLSsrLS0tLS0rLSstLSstLSstKysrLS0tLSstKy0tLS0tLS0rLS0tLS0tLS0tKy0tLf/AABEIALcBEwMBIgACEQEDEQH/xAAbAAADAAMBAQAAAAAAAAAAAAAAAQIDBAUGB//EADwQAAIBAgMFBgQEBQIHAAAAAAABAgMRBCExBRJBUWEGEyJxgZGhscHwMkLR4QcjUnKCYnMUFRZDkrLx/8QAGgEBAQEBAQEBAAAAAAAAAAAAAAECAwQFBv/EACERAQEAAgICAwEBAQAAAAAAAAABAhEDMSFBEhMyBFEj/9oADAMBAAIRAxEAPwD2cUWhRLSPz77oRaQki0AIokaKGACAAARUAAJsii4rkzmkm20ktW3ZL1PObU7ZYalvRpt1pq9lH8G8uG9+lzUxt6S2Tt6RyS1yMNbGUoJuVSKS1u0fPJdssVVedNQV9IrP1vr5CdR142qudTVxT0vySVrPpZaHacGXtyvNPT0GM7eYeDahCc0na78Kb6XV/cvAduMNUe7JShLrmjxU60Jb1OKTa13s2klI0a1BKot229Cbi+t2jtP58XK82T7LhMbSqq9Oal8/Y2EfHMJtOVOq1CTjyzeUlx+nW59A7O9pFXilUVpp2k1+Ho3yOHJw3HzHXDlmXh6W40zGmUmcHZY0SmNBFDJHcBhcVwuBQCQwEyS2SyCRFCClYBgEakS0TEtEaUkMSGUAAICgEBUDENksB3EwJYHgv4lY6pF0oXjGle6W+7zllm0tEtNTzWFUnaVSCaeV1OpvfGX1NPtftGWJxlZybcIVHTgrOyUHby1uYsJipQ/lyUpRaai1e6XxPo8WGsY8XJnvJ6Ov3Mad1eUV5+F9OKfx+vP2htVK0oPfukpPjlz68U0czGYiplq+CkspNcnzOXabd18vodY510JbUvU7382kut7Z/Axyx1pSlbNypyX+Ls38LhhtmOeVrX4cPQ6mH7K1528Lej6e5LljFmGVcCWL/mX/ANfwO/sTHuKedm2+t4tWat1vb1ZursDN5t2zOZjNiVMLNKcmoyyjJJexn5Y5eGvhnh5r7RhKynCMlfOK1104mwjwPZPtDPvI0Kk3NTahGTtdT1SfO64nvUz5+eFxuq9mOUym4tFJkIpMw0oBJjAYIQwKBMQANiYARCAACkAWGBqxRaJRSIqgEADEMRUAAIBsQCKBksYgPkva3ZMYYyUIZOpOdXNZWlJvyyzPW9lOzNJQdWa33PKLefhXH3uaf8RIKNTD1OjhJf6d6930v8z2WxpR7qnuu63Eke2Zf844Y4z7K5tbsRhqrvazetuJNHsFhovS56ilNoyzkyS+G7241Hs/h4KyhH2RurDwirKKVjNK5gr73AzWo08VY8/t3AwrRlGWVk2nyZ3Zwd8zjbWqNb708JJWsvMfOcFWdDE0KjTfd14uaXGMWs/j7n2qLPjc4tz3krNSv6NrL5H2OI/p9Vw4PcWmUiRpnmd1oaJTKQDGIAGAAADEAQMAAgAACq1kUSijKgBCuBYCQFQxAACENiKpAAgPMdvaO9Rpy5TafSLV/oZ+xeMc6MU/y2S9DobdoqpQnF56SS521+F/Y5GwJRw1Fym0lGU3pqm7r5npxu+OOWtZva0nzM++j55tHt9Gn+GKfI0sN/EWMnaaSV9bnSSyJbLe30x1YmrXrrocnD15VqXexfhauuqPEdp+0lWnJwjOzvold/sZ78N6mPl7+daLdro4e2Erc00fNobYxbqbjc995tLNpc2r3WvE7GzcdVlZ95vx0kuKLlh8WMeT5JnSUatm0o78W3wV8j6nhMRGpBThfdle11Z5O2h84r0k6mf4XGM3wXhb/Y9t2ab7l3f/AHHZck0mcuW7kawx1t1ikSNHBtSLRCKRAyiRlDGIAGAgAYAAQAAAawxAZU2SMQU0UQO4FAICgZIxMBMQMRRjxUkoNtN2TeWunA4NTZ0qlDclFxk5p2eqTSsnbpY9JF2z1+pz8PilOrWV77tSyvy3Inbj6ZuvDy8ew9LOVeNSpKXCD8KV72SVnyzLp9iabSjCg4QWa35PXyTue9wliq9ZLieiW67ZuM3vTS2Fs6NCk6K0SuuSvy6Hj6/Z2lVr1ZySk1N5Nex9Bw8M7vWxwquGcaknHi28zPXlXI/6fd7qhScv6uOltfImexI0024xU3rZaHp8FjIThdeXVM0dq1VZslu1kk9PH4inDfgp/hvKD8mr394r3PU9mcO4UFvO7k7355anlMe3KUFHV1qMV/lNL6s97h6W5CMdd2KXmzlyXwY3tlGiSkcGlIpEItBFAIYDAQAUBIyhjEMAAACNUZKKMtABAAwEADAAABMBMoQBcVyhnAxslSxXJVaamv7ou0vg45Heued7awkqEa8F46FRSf8AtvwyXlmn6HTi/WmM+tu1TxiS1CnaclKU1HjFXV78GeHwXaOE0968Xpwte1zz727VlVlFxqye88ovlotbfaPTMKz9s8PZPt3Uw1WpSxCjNRbUZwTt6rOzPM7b7eSqVP5LnFc0suupr1tmVq29OOFreNu/ip72b88nbiY5dmKsVdUHH++pFv4HSYz2Wcl6eo2Nt+n3cXKTUreJ8L9Taxe1N6OTT5taHgdpYXEU4pR7uK5K+i5u5qU9pzhCML3tdX6ZGfr35jGXLcbrJ6zEYm9XDxjK0niaD8rVIs+mI+P9iaM8TjaOd40X3s3bJbv4fXea9mfX0efnmrI3xX5bqikQirnndVItGNFoChAADAQAMZIwikUShlDAQAaqGSikZUAAAABcVwGArjABMYmAmTYbEaAY69KM4yhJb0ZJxkuaas0WAHxLtTs+rgq86bv3e9vUpf103fV81oxbD2mo1G5ZtpLPk/2+R9P7U7PhXg4TipRcV5ppuzXJnybauzJYWbi77rvuS5rryZ9LiznJjq9vBy4XjvynT2GK223TvDeTeStr5s4lHbNWT8Upy8Tyvok9LGvgsZucrrg87pWf6GOviIb11kpO9rrK2WX3wLMNeG7zWztm2ntFuNklbj1+/wBTzlpSmoxTk2/ClxNjHYi+Sa4Wy1OxsDAd345LxyVkuMV+uhu2YYuOryZPoH8OtlxoYaTydSc/5kue6lZeSu/dnrTidkl/If8AuP8A9YnaPl53eVtfQxkk1FXGiSkYaWikyEVcgq4XJuAFDJHcBjRIyikUSgCHcBABqpjJRRFA7iAAuAAAAILgMGK4XATExiKEMaiTU087o7Y8dvbnlnrpoYy0m+iseZ2xsyNSLU4qS8l8D1MY3u/vkaWLo30Ok8dL3HybaXZ6cJXpyy4J8PU0qWyK0tZJW88j6Vjtn34HFqYSzdzt92Ujhf58duHgdkQpWk3vz5vReSOvg6buZJUFkbdGlZGMs7e3THCY9NzDbcnhXBbqnSnO0lo07ZNP00PWbP2pSrrwys9HF5P9z55tDxTpx/pvJ/JfN+xu7Oi0m3xd/bL9Dn9Us2Xk1X0RFI85gdqVYqKn448/ze/E7uHxEZ/hfpxRwywuLpjlK2EMlFGGjAQwGAguBSZVyBoCxkhcodwEIDXQyEUQO47kgBQhAAxAAAAFKmzWONy6S2TtKRlhS++JagN6Hpw45i45Z2tWrdtRXH5GWrDppYwUXeblyubC1bOjDlu8W7Zp3sv0MG/fNaM3MRDPly8vu5qwi97haXwlx9/1M2OmF9NDFq6yOJXpNs9Pi8NZ6amisDdmHVxO4sTOooq70R0Np09y0Us2c/8A4OTzlml8zUm2Mrpo04OUnJp3louSWiOjQpaR5eZmoYS13xasunVffI28HhU8+F195HR51U4q9lqv0OhQvro0a+Ep3k3wvzOhGnay9syVptUMU/zZ9TbhNPRmjCl1MkdWlwOWXFL06TksbgzBCb0Mm9wOGWFxdMc5V3Ai5SMNKGiUUgKAQXAYE3ADWTHcxplXCruBNx3IGArhcodzLSpOXREUobzt7mzOSjFvSyO3Hx783pyzz14iVFLIq3MW9kn0T14B7I9Ov8cU1XZZX0IlPw621YYqVlr1MOJfhUeaQDwK8N+d+PsZYLX9yaMbRiugJ5sDBWgm+q6t5feZpb9nb4214pm/J5+j52yNPE0b6Z8vvp9QNlx3krpr6+RUcMkm+Zl2FtZ070px3oyklBXjlJ+eWZ26tacLWpZt5JuC+VzePDMpuUy/osurHl62xpSUqrjZJXu8kkuXP0OHKjeXKK16I9NtradSd6Ut1JZyUd558It8fZHFhG8lFPjeXn+VfX25kuMxvg+eWU8sU6W7F3VsuPukbGEo+BX5df1KxkXZQX5mva5t7lkunlf2MjVwNKyembfmbkfL04CwVFJXtmnzMr6fQCo5LLL5mtgpqaqPV95OK/xe79Gbyd1nqcvs096jGbWrlJX5ybf1A3MbVVKnKT1XDm3w8zHgKE0ryd6kvFPp0XRGvXi6tVJpKEJb1v6mldXOpSVk3dZrPoNbNkmUmaGAr7yf90re5uJniyx1dPTjdzbImUY0x3Mqu4XJuJsCrgRcQGqpFpmBSKTIrNvDuYd4e8BluFzHvFU82l1LJu6LdN6hkur+7BUaaa6PzGnr58eJiqza875H0JJJp497uyoyvTjfhFq3Va/IKlTxQfO66feRhpTs5RWkvGsnZP8AN9PcjHVGoN2/Dut+nH4EVsY+WSjrvTiutr5mDEZzWV1bMutJSdNp5Zvz8Lt8WYqEvE3xv1A24vLLKxC1+vIW/fje+tzFKWafw0zIHiZZ8s7f/QkstdbeWupjrybT009BObavpoUatWOdubT8+q+B0v8Ams3FpybmkoqX+np1OXiG7rS/DN+3kYqdZNtRi5Tvmn+GPn955GpbOmbJe2zJdLyaTz0S5seEp3bfBZ3dtXxfUjd3Y2ebebb4vmzPQiowf7GWmJR3qjbStHLzZstWTtfQw4WF7v4pozzl1AMPJ2t536CqvmXCWV0rPnwv6mGrUu0uOuquBmrztSk77vhdvRHP2RLdwdJWvemm/VZZGbacrUZ217ua5flZz8NiFKlhaaTzpRk9L2jFL9H6BHWw1G2W803ZtJftp7mvt3HqlS3Fbfn4Y55mzOpChTc5eFJb0m7JdXbRHmdnzliqrxVRPu02qCvbwr81nxdrgdbBru4wWtln66nWTOZutqUnpw98kbWFq3hF9PkcOedV14r6bSY7mHeHvHndmXeFvGPeFvAZN4DFvABpKZamAAPfGpABBW+Z8K878hAdOL9xjk/NbLk1K3HgtTFXd81nbXPgAHteZq1pNO8dV4o3XLVeuhrYnGqdCT0bi1pwf7ABKrJgcRvUqbtn3Cf/AJW/QvZ9raa+/F+wABtOeWS5GHTXqwAKVR3VkuGfkY8JNOL4tNjADUr1+X3Yz4Zuy4LXh9AAqHq+HtyLqy3YWt04MAIJw0mk/deRkc08suuvpoACiItr5GCcs429LZef1AAHtGT7uStm4SWvNWPOdjq3evvJtblOnSoU01e7jG7+L48kAFnSe17YxksZiHhItqhScZV+G9xjDy0v7HeoYdRV5WSst1JLwrhoAFovE1Eoq2uVteltRYKte+Vlqvl6ABz5fxW+P9NrfDfADxPSW+LfAAF3gAAH/9k="width ="300"height="300" alt=""> -->
    <h3> Welcome , our <?php echo $row["user_job_experience"];?></h3>
    <p><?php echo $row["name"];?></p>
    <img src="<?php echo $row["profilel"] ?>" alt="">
    <br>
    <a href="update.php">Update</a>
    <br>        
    <a href="logout.php">Logout</a>
        </div>

        </div>
    </div>
     

</body>

</html>