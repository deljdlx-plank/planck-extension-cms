$(function() {


    var options = {
        sourceURL: '?/cms/site-tree/api/get-tree',
        createNodeURL: '?/cms/site-tree/api/save',
        renameNodeURL: '?/cms/site-tree/api/save',
        moveNodeURL: '?/cms/site-tree/api/move',
        deleteURL: '?/cms/site-tree/api/delete',
        deleteBranchURL: '?/cms/site-tree/api/delete-branch',


    };

    var tree = new Planck.Extension.ViewComponent.View.Component.EntityTree(options)
    tree.render('.plk-site-tree-container');



});