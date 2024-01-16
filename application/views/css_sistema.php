a {
    color: #3973af;
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
}
.indice>ul {
    list-style-type: none;
    padding: 2px;
}
.indice>ul>li>ul {
    list-style-type: none;
    padding: 0 0 0 13px;
}
.indice>ul>li {
    margin-top: 10px;
    margin-bottom: 30px;
}
.indice>ul>li>ul {
    margin-top: -10px;
}
.indice>ul>li>ul>li>ul>li {
    list-style-type: circle;
    margin-left: 17px;
}
.indice>ul>li>ul>li>ul>li a {
    color: #8b2f25;
    font-size: 0.88rem;
    font-weight: bold;
}
.indice>ul>li>ul>li>ul {
    padding: 0;
}
.table-sm td,
.table-sm th {
    padding: .3rem 2rem .3rem 0 !important;
}
#indice>ul>li>a,
#indice>ul>li>ul>li>a {
    text-transform: uppercase;
    font-weight: bold;
}
#indice>ul>li>a,
#indice>ul>li>ul>li>a {
    text-transform: uppercase;
}
#indice>ul>li>ul>li>a {
    color: #8b2f25;
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
    color: #8b2f25;
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
  .legenda_tabela {
    font-style: italic;
    font-size: 0.8rem;
}
  .legenda_tabela p {
    margin: 3px 0;
}
.capitulos {
    list-style-type: none;
    text-transform: uppercase;
    font-weight: bold;
    padding: 9px;
}
.capitulos li {
    margin-bottom: 8px;
}
.table-sm {
    font-size: 0.8rem;
}

@media(max-width:770px) {
    #conteudo img {
        margin: 0 -15px;
        width: calc(100% + 30px);
    }
    #indice,
    .este_capitulo {
        display: none;
    }
}