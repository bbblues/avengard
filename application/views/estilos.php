body {
  color: #bfbfb3;
  font-family: 'Average', serif;
}
a {
  color: #c98d7d;
  text-decoration: none;
}
a:hover {
  color: white;
  text-decoration: none;
}
h1, h2, h3, h4, h5, h6 {
  font-family: 'Marcellus', serif;
}
header {
  height: 472px;
  background-image: url('<?php echo base_url('assets/') ?>img/home.jpg');
  background-size: cover;
  background-position: center center;
  color: #dddecc;
}
header .textura {
  height: 472px;
  background-image: url('<?php echo base_url('assets/') ?>img/textura.png');
  background-repeat: repeat;
}
header .textura > div {
  padding-top: 190px;
}
header h1 {
  line-height: 2.2rem;
  letter-spacing: -0.07rem;
}
header .black-box {
    background: #0000008c;
    padding: 50px 30px 30px 40px;
    margin-bottom: 30px;
}
#regras .botao {
  border-radius: 0;
  padding-right: 28px;
  width: 100%;
  background-color: #542e21;
  border: none;
}
#regras img {
    width: 32px;
  margin: 0px 10px 3px 10px;
}
.miolo {
  background-image: url('<?php echo base_url('assets/') ?>img/fundo-cinza.png');
}
.sistema {
  background-image: url('<?php echo base_url('assets/') ?>img/fundo-claro.png');
  color: #4c4235;
  padding: 100px 0;
}
.sistema h1,
.sistema h2,
.sistema h3,
.sistema h4 {
  font-weight: bold;
  color: #7b4428;
  margin: 30px 0 10px 0;
}
.sistema img {
  width: 100%;
}
.sistema table p {
  margin: 0;
  font-size: 0.9rem;
}
.sistema .table td,
.sistema .table th {
    border-top: 1px solid #0000000d;
}
.sistema .table tr:first-child {
    font-weight: bold;
}
.navbar-brand img {
  width: 192px;
}
nav {
  background-color: #00000063;
  margin-bottom: -103px;
}
.nav-link {
  font-size: 1.5rem;
}
.navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0rem;
    padding-left: 2rem;
}
footer img {
    width: 23px;
    margin-bottom: 8px;
    margin-right: 10px;
}

.Divider {
    height: 55px;
    margin: -18px 0;
    position: relative;
    z-index: 1;
}
.Divider-rule {
    background: url('<?php echo base_url('assets/') ?>img/divider-sprite.png') repeat-x 50% 100%;
    border: 0;
    height: 55px;
    left: 50%;
    margin: 0 0 0 -82px;
    position: absolute;
    top: 5px;
    width: 164px;
}
.Divider:before {
  left: 0;
  margin-right: 82px;
  right: 50%;
  background: url('<?php echo base_url('assets/') ?>img/divider-sprite.png') repeat-x 50% 0;
  content: "";
  height: 55px;
  position: absolute;
  top: 0;
}
.Divider:after {
  left: 50%;
  margin-left: 82px;
  right: 0;
  background: url('<?php echo base_url('assets/') ?>img/divider-sprite.png') repeat-x 50% 0;
  content: "";
  height: 55px;
  position: absolute;
  top: 0;
}
.miolo .container {
  padding-top: 100px;
}
.miolo .container .thumb {
  border: 3px #b2b3a0 solid;
}
.miolo .data {
  font-size: 0.8rem;
    font-style: italic;
    margin-bottom: 0;
}
.miolo .intro {
  font-size: 0.95rem;
  line-height: 1.2rem;
}
.miolo h3 {
  color: #c98d7d;
  font-size: 1.5rem;
  letter-spacing: -0.07rem;
}
.miolo .leia-mais img {
    width: 26px;
    margin: 0px 5px 3px 0px;
}
.miolo .leia-mais {
  font-size: 0.9rem;
}
.miolo .esq .row {
  margin-bottom: 60px;
}
footer {
    padding: 100px 0;
    background-color: #171715;
}
.logo {
    fill: #21c25e;
    width: 54px;
    margin-left: auto;
}
.direita {
  text-align: right;
}
#avengardpic {
    color: #21c25e;
    font-size: 18px;
}
@media(max-width:770px) {
  header .black-box {
    margin: 0 -15px;
  }
  .direita {
    text-align: center;
    padding-bottom: 50px;
  }
}
