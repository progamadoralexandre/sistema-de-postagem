
<div class="corpo col-12">
    <h4>Visão geral</h4>
    <p>Apresentando dados de 27 Janeiro 2024 a 20 Fevereiro de 2024</p>
    <div class="card-content d-flex flex-wrap">
        <div class="cards m-2 mt-2" *ngFor="let label of data.labels; let i = index">
          <svg width="24" height="24" class="mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="24" height="24" rx="6" fill="black"/>
            <g clip-path="url(#clip0_156_435)">
              <path d="M16.3633 12.2041C15.4474 9.82415 12.1866 9.69581 12.9741 6.23665C13.0324 5.97998 12.7583 5.78165 12.5366 5.91581C10.4191 7.16415 8.89659 9.66665 10.1741 12.945C10.2791 13.2133 9.96409 13.4641 9.73659 13.2891C8.68075 12.49 8.56992 11.3408 8.66325 10.5183C8.69825 10.215 8.30159 10.0691 8.13242 10.32C7.73575 10.9266 7.33325 11.9066 7.33325 13.3825C7.55492 16.6491 10.3141 17.6525 11.3058 17.7808C12.7233 17.9616 14.2574 17.6991 15.3599 16.69C16.5733 15.5641 17.0166 13.7675 16.3633 12.2041ZM10.9499 15.1383C11.7899 14.9341 12.2216 14.3275 12.3383 13.7908C12.5308 12.9566 11.7783 12.14 12.2858 10.8216C12.4783 11.9125 14.1933 12.595 14.1933 13.785C14.2399 15.2608 12.6416 16.5266 10.9499 15.1383Z" fill="white"/>
            </g>
            <defs>
              <clipPath id="clip0_156_435">
                <rect width="14" height="14" fill="white" transform="translate(5 5)"/>
              </clipPath>
            </defs>
          </svg>
          <p class="mb-1">Total de Postagem</p>
          <span>Teste</span>
        </div>
        <div class="cards m-2 mt-2" *ngFor="let label of data.labels; let i = index">
          <svg width="24" height="24" class="mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="24" height="24" rx="6" fill="black"/>
            <g clip-path="url(#clip0_156_435)">
              <path d="M16.3633 12.2041C15.4474 9.82415 12.1866 9.69581 12.9741 6.23665C13.0324 5.97998 12.7583 5.78165 12.5366 5.91581C10.4191 7.16415 8.89659 9.66665 10.1741 12.945C10.2791 13.2133 9.96409 13.4641 9.73659 13.2891C8.68075 12.49 8.56992 11.3408 8.66325 10.5183C8.69825 10.215 8.30159 10.0691 8.13242 10.32C7.73575 10.9266 7.33325 11.9066 7.33325 13.3825C7.55492 16.6491 10.3141 17.6525 11.3058 17.7808C12.7233 17.9616 14.2574 17.6991 15.3599 16.69C16.5733 15.5641 17.0166 13.7675 16.3633 12.2041ZM10.9499 15.1383C11.7899 14.9341 12.2216 14.3275 12.3383 13.7908C12.5308 12.9566 11.7783 12.14 12.2858 10.8216C12.4783 11.9125 14.1933 12.595 14.1933 13.785C14.2399 15.2608 12.6416 16.5266 10.9499 15.1383Z" fill="white"/>
            </g>
            <defs>
              <clipPath id="clip0_156_435">
                <rect width="14" height="14" fill="white" transform="translate(5 5)"/>
              </clipPath>
            </defs>
          </svg>
          <p class="mb-1">Total de Usuário</p>
          <span>Teste</span>
        </div>
    </div>
    
    <div class="table mt-5 table-responsive ">
        <span>Postagens Recentes</span>
        <table class="table custom-table">
            <thead class="">
              <tr>
                <th class="first" scope="col">
                    <svg width="3" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="#322D44"/>
                    </svg>                   
                    Titulo
                </th>
                <th scope="col">
                    <svg width="3" class="me-2" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="white"/>
                    </svg>
                    Autor
                </th>
                <th class="last" scope="col">
                    <svg width="3" class="me-2" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="white"/>
                    </svg>   
                    Data
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="acoes">
                <td>Luanda</td>
                <td>
                    <svg width="3" class="me-2" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="#B5B5C3"/>
                    </svg>
                    100
                </td>
                <td>
                    <svg width="3" class="me-2" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="#B5B5C3"/>
                    </svg>
                    100
                </td>
              </tr>
              <tr class="acoes">
                <td>Benguela</td>
                <td>
                    <svg width="3" class="me-2" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="#B5B5C3"/>
                    </svg>
                    100
                </td>
                <td>
                    <svg width="3" class="me-2" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="#B5B5C3"/>
                    </svg>
                    100
                </td>
              </tr>
              <tr class="acoes">
                <td>Huambo</td>
                <td>
                    <svg width="3" class="me-2" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="#B5B5C3"/>
                    </svg>
                    100
                </td>
                <td>
                    <svg width="3" class="me-2" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="#B5B5C3"/>
                    </svg>
                    100
                </td>
              </tr>
            </tbody>
          </table>
    </div>
</div>






<style>
    
.corpo{
    .card-content{
        .cards{
            background: #F9FBFC;
            width: 241px;
            height: 150px;
            border-radius: 14px;
            padding: 25px;
            cursor: pointer;
            p{
                font-size: 15px;
                font-style:normal;
                font-weight: 500;
                line-height: 18.15px;
            }
            span{
                font-weight: 700;
            }
        }
        .cards:hover{
            background: #f1f2f3;
        }

    }

    .table{
        span{
            font-size: 15px;
            font-weight: 600;
            line-height: 28.15px;
        }
        .custom-table{
            thead{
                tr{
                    th{
                        background-color: #322D44;
                        padding: 15px;
                        border: none;
                        color: #fff;
                        font-size: 13px;
                        min-width: 200px;
                    }
                    .first{
                        border-radius: 8px 0 0 0;
                    }
                    .last{
                        border-radius: 0 8px 0 0;
                    }
                }
            }
            tbody{
                tr{
                    border-bottom: solid 1px #EAEAEA;
                    td{
                        padding: 15px;
                        font-size: 15px;
                        line-height: 22px;
                        color: #2F2B3DE5;
                        img{
                            width: 33px;
                            height: 33px;
                            border-radius: 4px;
                        }
                    }
                }
            }
        }
    }


    @media(max-width: 900px){
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 40px;
        zoom: 80%;
    }
    @media(max-width: 600px){
        padding: 16px;
        padding-bottom: 40px;
        zoom: 80%;
        .grafico{
            width: 100%;
            margin: 0 !important;
        }
        .cards{
            margin: 0;
            margin-right: 0 !important;
            width: 100% !important;
        }
    }
}
</style>