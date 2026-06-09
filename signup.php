@import url('https://fonts.googleapis.com/css2?family=Dongle:wght@300&family=DynaPuff:wght@500&family=Josefin+Sans:wght@500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab&family=Sedgwick+Ave+Display&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('login.jpg');
    background-size: cover;
    background-position: center;
}

.signup{
    width: 750px;
    background: transparent;
    border: 2px solid rgba(255,255,255,.2);
    box-shadow: 0 0 10px rgba(0 ,0 ,0, .2);
    backdrop-filter: blur(20px);
    border-radius: 10px;
    color: white;
    padding: 40px 35px 55px;
    margin: 0 10px;
}
 
.signup h1{
    font: 36px;
    text-align: center;
    margin-bottom: 20px; 
}

.signup .input-box{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.input-box .input-field{
    position: relative;
    height: 50px;
    width: 48%;
    margin: 13px 0;
} 

.input-box .input-field input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: 2px solid rgba(255,255,255,.2);
    outline: none;
    font-size: 16px;
    color: #fff;
    border-radius: 6px;
    padding: 15px 15px 15px 40px;
}

.input-box input::placeholder {
    color: white;
}

.input-box .input-field i{
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}

.signup .button{
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 6px;
    box-shadow: 0 0 10px rgba(0 ,0 ,0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

@media (max-width: 576px){
    .input-box .input-field{
        width: 100%;
        margin: 10px 0;
    }
}

.signup .tologin {
    text-align: center;
    font-size: 18px;
    margin-top: 20px;
}

.tologin a {
    color: white;
    text-decoration: none;
    font-weight: 600;
}

.tologin a:hover {
    text-decoration: underline;
}