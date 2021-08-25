<section id="main">
    <!--成果物の欄 -->
    // TODO: グローバルタスクのようにプロジェクトに紐づくタスクの登録＆それを引用するように修正する

    <?= $this->hook->render('template:task:show:before-attachments', array('task' => $task, 'project' => $project)) ?>
    <?= $this->render('task_file/show', array(
        'task' => $task,
        'files' => $files,
        'images' => $images
    )) ?>
    <?= $this->projectHeader->render($project, 'BoardViewController', 'show', true) ?>

    <?= $this->render('board/table_container', array(
        'project' => $project,
        'swimlanes' => $swimlanes,
        'board_private_refresh_interval' => $board_private_refresh_interval,
        'board_highlight_period' => $board_highlight_period,
    )) ?>

</section>
