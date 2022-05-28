<?php require_once __DIR__ . '../../../inc/env.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $_ENV['LINK_WEB']  ?>style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/orgchart@3.1.1/dist/css/jquery.orgchart.min.css">
    <title>Document</title>
    <style type="text/css">
        .orgchart .second-menu-icon {
            transition: opacity .5s;
            opacity: 0;
            right: -5px;
            top: -5px;
            z-index: 2;
            position: absolute;
        }

        .orgchart .second-menu-icon::before {
            background-color: rgba(68, 157, 68, 0.5);
        }

        .orgchart .second-menu-icon:hover::before {
            background-color: #449d44;
        }

        .orgchart .node:hover .second-menu-icon {
            opacity: 1;
        }

        .orgchart .node .second-menu {
            display: none;
            position: absolute;
            top: 0;
            right: -70px;
            border-radius: 35px;
            box-shadow: 0 0 10px 1px #999;
            background-color: #fff;
            z-index: 1;
        }

        .orgchart .node .second-menu .avatar {
            width: 60px;
            height: 60px;
            border-radius: 30px;
            float: left;
            margin: 5px;
        }
    </style>
</head>

<body>
    <div id="chart-container"></div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/orgchart@3.1.1/dist/js/jquery.orgchart.min.js?v=3.1.1"></script>

</body>
<script type="text/javascript">
    $(function() {

        var datascource = {
            'id': '1',
            'name': 'Haruman Wiguna',
            'title': 'Ketua',
            'children': [{
                'id': '2',
                'name': 'Aiman Abdurrahman',
                'title': 'Wakil Ketua',
                'children': [{
                        'id': '3',
                        'name': 'Ardian Hafizh Nurhilman',
                        'title': 'Anggota',
                        'children': [{
                            'id': '4',
                            'name': 'Vernando Bayu',
                            'title': 'Anggota',
                        }]

                    }

                ]
            }]
        };

        $('#chart-container').orgchart({
            'data': datascource,
            'visibleLevel': 2,
            'nodeContent': 'title',
            'nodeID': 'id',
            'createNode': function($node, data) {
                var secondMenuIcon = $('<i>', {
                    'class': 'oci oci-info-circle second-menu-icon',
                    click: function() {
                        $(this).siblings('.second-menu').toggle();
                    }
                });
                var secondMenu = '<div class="second-menu"><img class="avatar" src="img/avatar/' + data.id + '.jpg"></div>';
                $node.append(secondMenuIcon).append(secondMenu);
            }
        });

    });
</script>

</html>