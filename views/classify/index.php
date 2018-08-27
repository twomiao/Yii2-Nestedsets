<?php

use app\assets\AppAsset;

//AppAsset::addCss($this, Yii::$app->request->baseUrl . "/zTree/css/demo.css");
//AppAsset::addCss($this, Yii::$app->request->baseUrl . "/zTree/css/zTreeStyle/zTreeStyle.css");
//AppAsset::addCss($this, Yii::$app->request->baseUrl . "/zTree/css/demo.css");
//AppAsset::addJs($this, Yii::$app->request->baseUrl . "/zTree/js/jquery-1.4.4.min.js");
//AppAsset::addJs($this, Yii::$app->request->baseUrl . "/zTree/js/jquery.ztree.core.js");
?>
<HTML>
<head>
    <TITLE> Yii 2.0 Nestedset 分类简单演示</TITLE>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="/ztree/css/zTreeStyle/zTreeStyle.css" type="text/css">
    <link rel="stylesheet" href="/zTree/css/demo.css" type="text/css">
    <link rel="stylesheet" href="/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css">

    <style type="text/css">
        #submitBtn {
            margin-top: 5px;
            width: 70px;
            height: 30px;
        }

        div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>

    <script type="text/javascript" src="/zTree/js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="/zTree/js/jquery.ztree.core.js"></script>
    <script type="text/javascript" src="/zTree/js/jquery.ztree.excheck.js"></script>
</head>
<body>
<div class="content_wrap">
    <div class="zTreeDemoBackground left">
        <ul id="treeDemo" class="ztree"></ul>
        <input type="button" id="submitBtn" name="submitForm" value="确认"/>
    </div>
</div>
<script type="text/javascript">
    var setting = {
        data: {
            key: {
                title: "t"
            },
            simpleData: {
                enable: true,
                pIdKey: 'pid',
            }
        },
        view: {
            showIcon: true,
            selectedMulti: true,     //可以多选
            showLine: false,
            expandSpeed: 'fast',
            dblClickExpand: true
        },
        check: {
            enable: true,
            chkStyle: "checkbox",    //复选框
            chkboxType: {
                "Y": "s",
                "N": "ps"
            }
        },
        callback: {
            beforeMouseDown: beforeMouseDown,
            beforeMouseUp: beforeMouseUp,
            beforeRightClick: beforeRightClick,
            onMouseDown: onMouseDown,
            onMouseUp: onMouseUp,
            onRightClick: onRightClick
        }
    };

    var zNodes = JSON.parse('<?=$tree;?>');
    var zTreeObj = "";

    var log, className = {down: "dark", up: "dark", right: "dark"};

    function beforeMouseDown(treeId, treeNode) {
        className.down = (className.down === "dark" ? "" : "dark");
        showLog("[ " + getTime() + " beforeMouseDown ]&nbsp;&nbsp;" + (treeNode ? treeNode.name : "root"), "down");
        return (!treeNode || treeNode.down != false);
    }

    function onMouseDown(event, treeId, treeNode) {
        showLog("[ " + getTime() + " onMouseDown ]&nbsp;&nbsp;" + (treeNode ? treeNode.name : "root"), "down");
    }

    function beforeMouseUp(treeId, treeNode) {
        className.up = (className.up === "dark" ? "" : "dark");
        showLog("[ " + getTime() + " beforeMouseUp ]&nbsp;&nbsp;" + (treeNode ? treeNode.name : "root"), "up");
        return (!treeNode || treeNode.up != false);
    }

    function onMouseUp(event, treeId, treeNode) {
        showLog("[ " + getTime() + " onMouseUp ]&nbsp;&nbsp;" + (treeNode ? treeNode.name : "root"), "up");
    }

    function beforeRightClick(treeId, treeNode) {
        className.right = (className.right === "dark" ? "" : "dark");
        showLog("[ " + getTime() + " beforeRightClick ]&nbsp;&nbsp;" + (treeNode ? treeNode.name : "root"), "right");
        return (!treeNode || treeNode.right != false);
    }

    function onRightClick(event, treeId, treeNode) {
        showLog("[ " + getTime() + " onRightClick ]&nbsp;&nbsp;" + (treeNode ? treeNode.name : "root"), "right");
    }

    function showLog(str, logType) {
        log = $("#log" + "_" + logType);
        log.append("<li class='" + className[logType] + "'>" + str + "</li>");
        if (log.children("li").length > 2) {
            log.get(0).removeChild(log.children("li")[0]);
        }
    }

    function getTime() {
        var now = new Date(),
            h = now.getHours(),
            m = now.getMinutes(),
            s = now.getSeconds(),
            ms = now.getMilliseconds();
        return (h + ":" + m + ":" + s + " " + ms);
    }

    $(document).ready(function () {
        zTreeObj = $.fn.zTree.init($("#treeDemo"), setting, zNodes);
        var nodes = zTreeObj.getNodes();
        for (let i in nodes) {
            zTreeObj.expandNode(nodes[i], true, false, true);
        }
    });

    $("#submitBtn").click('on', function () {
        var checkNodes = zTreeObj.getCheckedNodes(true);
        var nodesList = [];

        for (let i in checkNodes) {
            var nodeJson = {};
            if (checkNodes[i].id != undefined || checkNodes[i].name != undefined) {
                nodeJson.id = checkNodes[i].id;
                nodeJson.name = checkNodes[i].name;
                nodesList.push(nodeJson);
            }

        }
        console.log(nodesList);
    });
</script>
</body>
</HTML>