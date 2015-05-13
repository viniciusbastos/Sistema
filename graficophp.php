
<!DOCTYPE html >
<html>
<head>
    <link rel="stylesheet" href="demos.css" type="text/css" media="screen" />

   
    <script src="libraries/RGraph.common.core.js" type="text/javascript"></script>
    <script src="libraries/RGraph.common.effects.js" type="text/javascript"></script>
    <script src="libraries/RGraph.hbar.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!--[if lt IE 9]><script src="/excanvas/excanvas.js"></script><![endif]-->

    <title>A Horizontal Bar chart example that is animated</title>


    <meta name="robots" content="noindex,nofollow" />
    <meta name="description" content="A Horizontal Bar chart that is animated using the Grow animation" />
    
</head>
<body>

<h2 style="text-align: center">Homicídios do Mes de Março/2015</h2>


<canvas id="cvs" width="600" height="400" >[No canvas support]</canvas>

<script>
    $(document).ready(function ()
    {
        var hbar = new RGraph.HBar({
            id: 'cvs',
            data: [1 , 1 , 1 , 3 , 1 , 1 , 1 , 1 , 1 , 2 , 1   ],
            options: {
                background: {
                    grid: false
                },
                xmax: 5,
                scale: {
                    decimals: 1
                },
                colors: {
                    self: ['#164366','#164366','#164366','#FDB515','#164366'],
                    sequential: true
                },
                labels: {
                    self: ['Asa Branca' , 'Baraúnas' , 'Campo do Gado Novo' , 'Campo Limpo' , 'Feira IX' , 'George Américo' , 'Jardim Cruzeiro' , 'Novo Horizonte' , 'Rua Nova' , 'Sobradinho' , 'Três Riachos'   ],
                    above: {
                        self: true,
                        decimals: 1
                    }
                },
                noxaxis: true,
                gutter: {
                    left: 200
                },
                xlabels: false
            }
        }).grow()
    })
</script>





</body>
</html>

