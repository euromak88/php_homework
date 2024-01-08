<?php
$question_task = "Какая задача стоит перед вами сегодня?\n";
$question_time = "Сколько примерно времени эта задача займет?\n";

$name = readline("Привет, как тебя зовут?\n");
$age = (int) readline("Сколько тебе лет?\n");
$task_1 = readline($question_task);
$time_1 = (int) readline($question_time);
$task_2 = readline($question_task);
$time_2 = (int) readline($question_time);
$task_3 = readline($question_task);
$time_3 = (int) readline($question_time);
$time_result = $time_1 + $time_2 + $time_3;

echo "{$name}, сегодня у вас запланировано 3 приоритетных задачи на день:
- {$task_1} ({$time_1}ч)
- {$task_2} ({$time_2}ч)
- {$task_3} ({$time_3}ч)
Примерное время выполнения плана = {$time_result}ч";