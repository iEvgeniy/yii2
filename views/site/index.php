<?php

/* @var $this yii\web\View */

 
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap\Tabs;
use yii\bootstrap\Alert;
use yii\bootstrap\Button;
use yii\bootstrap\ButtonDropdown;
use yii\bootstrap\ButtonGroup;
use yii\bootstrap\Carousel;
use yii\bootstrap\Collapse;
use yii\bootstrap\Modal;
use yii\bootstrap\Progress;
use yii\bootstrap\ActiveForm;

$this->title = 'Мой сайт разработанный на Yii';
?>




<div class="site-index">
   
    <div class="jumbotron">
        <h1> Поздравляем!</h1>

        <p class="lead">Сайт работает в тестовом режиме!</p>
    </div>
<?php echo Carousel::widget ( [
    'items' => [
    [
        'content' => '<img style="width:100%; " src="http://nix-tips.ru/wp-content/uploads/2014/11/carousel003.jpg"/>',
        'caption' => '<h2>Эфективно!!!</h2><p></p>',
        'options' => []
    ],
     [
        'content' => '<img style="width:100%" src="http://nix-tips.ru/wp-content/uploads/2014/11/carousel002.jpg"/>',
        'caption' => '<h2>Быстро!</h2><p></p>',
        'options' => []
    ],
     [
        'content' => '<img style="width:100%" src="http://nix-tips.ru/wp-content/uploads/2014/11/carousel001.jpg"/>',
        'caption' => '<h2>Долгий эффект!</h2><p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Заказать</a></p>',

        'options' => []
    ]
    ],
       'options' => [
       'style' => 'width:100%;' // Задаем ширину контейнера
    ]
]);
?>
        
    

    <div class="body-content">

        <div class="row">
<!-- BEGIN FEATURES OFF YII+BOOTSTRAP-->
<div class="jumbotron">
<h3>YII2: ВСЕ ПЛЮШКИ TWITTER BOOTSTRAP</h3>

<h4>bootstrap3 + yii2</h4>

<p>Одной из замечательных особенностей Yii 2.0 является встроенная поддержка Bootstrap 3.0 от Twitter.</p>

<p>Для вывода компонентов бутстрапа в шаблонах приложения можно использовать виджеты. 
Виджеты в Yii2 — небольшие блоки кода, 
которые можно легко многократно использовать для форматированного вывода данных. 
Как и большинство объектов в Yii 2.0, настройки виджету можно передать в виде массива параметров. 
Вместо немного монструозного</p>


Это значительно улучшает читаемость кода.<br>

Далее рассмотрим некоторые варианты использования Twitter Bootstrap в Yii2.<br>
</div>
Carousel (yii\bootstrap\Carousel)





<?php echo Carousel::widget ( [
    'items' => [
    [
        'content' => '<img style="width:474px;height:296px" src="http://nix-tips.ru/wp-content/uploads/2014/11/carousel003.jpg"/>',
        'caption' => '<h2>Yii Gii</h2><p>Удобный встроенный генератор кода. Модули, модели на основе таблиц в БД и, конечно же, CRUD</p>',
        'options' => []
    ],
     [
        'content' => '<img style="width:474px" src="http://nix-tips.ru/wp-content/uploads/2014/11/carousel002.jpg"/>',
        'caption' => '<h2>Отличный отладчик</h2><p>Легко подключается, помнит все запросы http, БД и логи</p>',
        'options' => []
    ],
     [
        'content' => '<img style="width:474px" src="http://nix-tips.ru/wp-content/uploads/2014/11/carousel001.jpg"/>',
        'caption' => '<h2>Быстрый старт</h2><p>Установка и обновление через composer</p>',
        'options' => []
    ]
    ],
       'options' => [
       'style' => 'width:474px;' // Задаем ширину контейнера
    ]
]);
?>
Tabs (yii\bootstrap\Tabs)





<?php echo Tabs::widget([
    'items' => [
        [
            'label' => 'Yii2',
            'content' => '<h2>Фреймворк Yii 2 - один из самых быстрых, безопасных и "крутых" php-фреймворков.</h2>',
            'active' => true
        ],
        [
            'label' => 'jQuery',
            'content' => '<h2>jQuery - один из самых популярных JavaScript фреймворков, который работает с объектами DOM.</h2>'
        ],
        [
            'label' => 'Bootstrap',
            'content' => '<h2>Twitter Bootstrap - супер фреймворк, объединяющий в себе html, css, и JavaScript для для верстки веб-интерфейсов и страниц.</h2>',
            'headerOptions' => [
                'id' => 'headerOptions'
            ],
            'options' => [
                'id' => 'options'
            ]
        ],
        [
            'label' => 'Еще табы',
            'content' => '<h2>Вы можете добавить любое количество табов. Просто опишите их структуру в массиве.</h2>'
        ],
        [
            'label' => 'Выпадающий список табов',
            'items' => [
                [
                    'label' => 'Первый таб из выпадающего списка',
                    'content' => '<h2>Обновите свои познания в Yii 2 and Twitter Bootstrap. Все возможнсти уже обернуты в удобные интерфейсы.</h2>'
                ],
                [
                    'label' => 'Второй таб из выпадающего списка',
                    'content' => '<h2>Один в поле не воин, а двое - уже компания.</h2>'
                ],
                [
                    'label' => 'Это третий таб из выпадающего списка',
                    'content' => '<h2>Третий не лишний!</h2>'
                ]
            ]
        ]
    ]
]);
?>


<?php echo Alert::widget([
    'options' => [
        'class' => 'alert-info'
    ],
    'body' => '<b>Привет</b>, Обратите внимание на эту полезную информацию.'
]);
echo Alert::widget([
    'options' => [
        'class' => 'alert-success'
    ],
    'body' => '<b>Вы победили!</b> Поздравляем с вашим новым достижением.'
]);
echo Alert::widget([
    'options' => [
        'class' => 'alert-warning'
    ],
    'body' => '<b>Обратите внимание</b> на эту важную информацию.'
]);
echo Alert::widget([
    'options' => [
        'class' => 'alert-danger'
    ],
    'body' => '<b>Ошибка!</b> Похоже, что-то сломалось.'
]);
?>

Buttons yii\bootstrap\Button



<?php
echo Button::widget([
    'label' => 'Default',
    'options' => [
        'class' => 'btn-lg btn-default',
        'style' => 'margin:5px'
    ], // переопределяем стили bootstrap css своими
    'tagName' => 'div'
]); // по желанию, возможно изменить тег элемента

echo Button::widget([
    'label' => 'Primary',
    'options' => [
        'class' => 'btn-lg btn-primary',
        'style' => 'margin:5px'
    ]
]);

echo Button::widget([
    'label' => 'Ура!',
    'options' => [
        'class' => 'btn-lg btn-success',
        'style' => 'margin:5px'
    ]
]);

echo Button::widget([
    'label' => 'Info',
    'options' => [
        'class' => 'btn-lg btn-info',
        'style' => 'margin:5px'
    ]
]);

echo Button::widget([
    'label' => 'Warning',
    'options' => [
        'class' => 'btn-lg btn-warning',
        'style' => 'margin:5px'
    ]
]);

echo Button::widget([
    'label' => 'Danger',
    'options' => [
        'class' => 'btn-lg btn-danger',
        'style' => 'margin:5px'
    ]
]);

echo Button::widget([
    'label' => 'Link',
    'options' => [
        'class' => 'btn-lg btn-link',
        'style' => 'margin:5px'
    ]
]);

// disabled
echo Button::widget([
    'label' => 'Default',
    'options' => [
        'class' => 'disabled btn-default',
        'style' => 'margin:5px'
    ], // add a style to overide some default bootstrap css
    'tagName' => 'div'
]); // change the tag used to generate the button if you like

echo Button::widget([
    'label' => 'Primary',
    'options' => [
        'class' => 'disabled btn-primary',
        'style' => 'margin:5px'
    ]
]);

echo Button::widget([
    'label' => 'Success',
    'options' => [
        'class' => 'disabled btn-success',
        'style' => 'margin:5px'
    ]
]);

echo Button::widget([
    'label' => 'Info',
    'options' => [
        'class' => 'disabled btn-info',
        'style' => 'margin:5px'
    ]
]);

echo Button::widget([
    'label' => 'Warning',
    'options' => [
        'class' => 'disabled btn-warning',
        'style' => 'margin:5px'
    ]
]);

echo Button::widget([
    'label' => 'Danger',
    'options' => [
        'class' => 'disabled btn-danger',
        'style' => 'margin:5px'
    ]
]);

echo Button::widget([
    'label' => 'Link',
    'options' => [
        'class' => 'disabled btn-link',
        'style' => 'margin:5px'
    ]
]);

// mixed size
echo Button::widget([
    'label' => 'Large',
    'options' => [
        'class' => 'btn-lg btn-default',
        'style' => 'margin:5px'
    ], // add a style to overide some default bootstrap css
    'tagName' => 'div'
]); // change the tag used to generate the button if you like

echo Button::widget([
    'label' => 'Default',
    'options' => [
        'class' => 'btn-primary',
        'style' => 'margin:5px'
    ]
]);

echo Button::widget([
    'label' => 'Small',
    'options' => [
        'class' => 'btn-sm btn-success',
        'style' => 'margin:5px'
    ]
]);

echo Button::widget([
    'label' => 'Extra Small',
    'options' => [
        'class' => 'btn-xs btn-info',
        'style' => 'margin:5px'
    ]
]);

echo Button::widget([
    'label' => 'Large',
    'options' => [
        'class' => 'btn-lg btn-warning',
        'style' => 'margin:5px'
    ]
]);

echo Button::widget([
    'label' => 'Default',
    'options' => [
        'class' => 'btn-danger',
        'style' => 'margin:5px'
    ]
]);

echo Button::widget([
    'label' => 'Default',
    'options' => [
        'class' => 'btn-lg btn-default',
        'style' => 'margin:5px'
    ], // переопределяем стили bootstrap css своими
    'tagName' => 'div'
]); // по желанию, возможно изменить тег элемента
 
echo Button::widget([
    'label' => 'Primary',
    'options' => [
        'class' => 'btn-lg btn-primary',
        'style' => 'margin:5px'
    ]
]);
 
echo Button::widget([
    'label' => 'Ура!',
    'options' => [
        'class' => 'btn-lg btn-success',
        'style' => 'margin:5px'
    ]
]);
 
echo Button::widget([
    'label' => 'Info',
    'options' => [
        'class' => 'btn-lg btn-info',
        'style' => 'margin:5px'
    ]
]);
 
echo Button::widget([
    'label' => 'Warning',
    'options' => [
        'class' => 'btn-lg btn-warning',
        'style' => 'margin:5px'
    ]
]);
 
echo Button::widget([
    'label' => 'Danger',
    'options' => [
        'class' => 'btn-lg btn-danger',
        'style' => 'margin:5px'
    ]
]);
 
echo Button::widget([
    'label' => 'Link',
    'options' => [
        'class' => 'btn-lg btn-link',
        'style' => 'margin:5px'
    ]
]);
 
// disabled
echo Button::widget([
    'label' => 'Default',
    'options' => [
        'class' => 'disabled btn-default',
        'style' => 'margin:5px'
    ], // add a style to overide some default bootstrap css
    'tagName' => 'div'
]); // change the tag used to generate the button if you like
 
echo Button::widget([
    'label' => 'Primary',
    'options' => [
        'class' => 'disabled btn-primary',
        'style' => 'margin:5px'
    ]
]);
 
echo Button::widget([
    'label' => 'Success',
    'options' => [
        'class' => 'disabled btn-success',
        'style' => 'margin:5px'
    ]
]);
 
echo Button::widget([
    'label' => 'Info',
    'options' => [
        'class' => 'disabled btn-info',
        'style' => 'margin:5px'
    ]
]);
 
echo Button::widget([
    'label' => 'Warning',
    'options' => [
        'class' => 'disabled btn-warning',
        'style' => 'margin:5px'
    ]
]);
 
echo Button::widget([
    'label' => 'Danger',
    'options' => [
        'class' => 'disabled btn-danger',
        'style' => 'margin:5px'
    ]
]);
 
echo Button::widget([
    'label' => 'Link',
    'options' => [
        'class' => 'disabled btn-link',
        'style' => 'margin:5px'
    ]
]);
 
// mixed size
echo Button::widget([
    'label' => 'Large',
    'options' => [
        'class' => 'btn-lg btn-default',
        'style' => 'margin:5px'
    ], // add a style to overide some default bootstrap css
    'tagName' => 'div'
]); // change the tag used to generate the button if you like
 
echo Button::widget([
    'label' => 'Default',
    'options' => [
        'class' => 'btn-primary',
        'style' => 'margin:5px'
    ]
]);
 
echo Button::widget([
    'label' => 'Small',
    'options' => [
        'class' => 'btn-sm btn-success',
        'style' => 'margin:5px'
    ]
]);
 
echo Button::widget([
    'label' => 'Extra Small',
    'options' => [
        'class' => 'btn-xs btn-info',
        'style' => 'margin:5px'
    ]
]);
 
echo Button::widget([
    'label' => 'Large',
    'options' => [
        'class' => 'btn-lg btn-warning',
        'style' => 'margin:5px'
    ]
]);
 
echo Button::widget([
    'label' => 'Default',
    'options' => [
        'class' => 'btn-danger',
        'style' => 'margin:5px'
    ]
]);
?>
ButtonDropdown yii\bootstrap\ButtonDropdown

<?php 



echo ButtonDropdown::widget([
    'label' => 'Default',
    'options' => [
        'class' => 'btn-lg btn-default',
        'style' => 'margin:5px'
    ],
    'dropdown' => [
        'items' => [
            [
                'label' => 'Второе действие',
                'url' => '#'
            ],
            [
                'label' => 'Третье действие',
                'url' => '#'
            ],
            [
                'label' => '',
                'options' => [
                    'role' => 'presentation',
                    'class' => 'divider'
                ]
            ],
            [
                'label' => 'Четвертое действие',
                'url' => '#'
            ]
        ]
    ]
]);

echo ButtonDropdown::widget([
    'label' => 'Primary',
    'options' => [
        'class' => 'btn-lg btn-primary',
        'style' => 'margin:5px'
    ],
    'dropdown' => [
        'items' => [
            [
                'label' => 'Второе действие',
                'url' => '#'
            ],
            [
                'label' => 'Третье действие',
                'url' => '#'
            ],
            [
                'label' => '',
                'options' => [
                    'role' => 'presentation',
                    'class' => 'divider'
                ]
            ],
            [
                'label' => 'Четвертое действие',
                'url' => '#'
            ]
        ]
    ]
]);

echo ButtonDropdown::widget([
    'label' => 'Success',
    'options' => [
        'class' => 'btn-lg btn-success',
        'style' => 'margin:5px'
    ],
    'dropdown' => [
        'items' => [
            [
                'label' => 'Второе действие',
                'url' => '#'
            ],
            [
                'label' => 'Третье действие',
                'url' => '#'
            ],
            [
                'label' => '',
                'options' => [
                    'role' => 'presentation',
                    'class' => 'divider'
                ]
            ],
            [
                'label' => 'Четвертое действие',
                'url' => '#'
            ]
        ]
    ]
]);

echo ButtonDropdown::widget([
    'label' => 'Info',
    'options' => [
        'class' => 'btn-lg btn-info',
        'style' => 'margin:5px'
    ],
    'dropdown' => [
        'items' => [
            [
                'label' => 'Второе действие',
                'url' => '#'
            ],
            [
                'label' => 'Третье действие',
                'url' => '#'
            ],
            [
                'label' => '',
                'options' => [
                    'role' => 'presentation',
                    'class' => 'divider'
                ]
            ],
            [
                'label' => 'Четвертое действие',
                'url' => '#'
            ]
        ]
    ]
]);

echo ButtonDropdown::widget([
    'label' => 'Warning',
    'options' => [
        'class' => 'btn-lg btn-warning',
        'style' => 'margin:5px'
    ],
    'dropdown' => [
        'items' => [
            [
                'label' => 'Второе действие',
                'url' => '#'
            ],
            [
                'label' => 'Третье действие',
                'url' => '#'
            ],
            [
                'label' => '',
                'options' => [
                    'role' => 'presentation',
                    'class' => 'divider'
                ]
            ],
            [
                'label' => 'Четвертое действие',
                'url' => '#'
            ]
        ]
    ]
]);

echo ButtonDropdown::widget([
    'label' => 'Danger',
    'options' => [
        'class' => 'btn-lg btn-danger',
        'style' => 'margin:5px'
    ],
    'dropdown' => [
        'items' => [
            [
                'label' => 'Второе действие',
                'url' => '#'
            ],
            [
                'label' => 'Третье действие',
                'url' => '#'
            ],
            [
                'label' => '',
                'options' => [
                    'role' => 'presentation',
                    'class' => 'divider'
                ]
            ],
            [
                'label' => 'Четвертое действие',
                'url' => '#'
            ]
        ]
    ]
]);

echo ButtonDropdown::widget([
    'label' => 'Link',
    'options' => [
        'class' => 'btn-lg btn-link',
        'style' => 'margin:5px'
    ],
    'dropdown' => [
        'items' => [
            [
                'label' => 'Второе действие',
                'url' => '#'
            ],
            [
                'label' => 'Третье действие',
                'url' => '#'
            ],
            [
                'label' => '',
                'options' => [
                    'role' => 'presentation',
                    'class' => 'divider'
                ]
            ],
            [
                'label' => 'Четвертое действие',
                'url' => '#'
            ]
        ]
    ]
]);

echo ButtonDropdown::widget([
    'label' => 'Default',
    'options' => [
        'class' => 'btn-lg btn-default',
        'style' => 'margin:5px'
    ],
    'dropdown' => [
        'items' => [
            [
                'label' => 'Второе действие',
                'url' => '#'
            ],
            [
                'label' => 'Третье действие',
                'url' => '#'
            ],
            [
                'label' => '',
                'options' => [
                    'role' => 'presentation',
                    'class' => 'divider'
                ]
            ],
            [
                'label' => 'Четвертое действие',
                'url' => '#'
            ]
        ]
    ]
]);
 
echo ButtonDropdown::widget([
    'label' => 'Primary',
    'options' => [
        'class' => 'btn-lg btn-primary',
        'style' => 'margin:5px'
    ],
    'dropdown' => [
        'items' => [
            [
                'label' => 'Второе действие',
                'url' => '#'
            ],
            [
                'label' => 'Третье действие',
                'url' => '#'
            ],
            [
                'label' => '',
                'options' => [
                    'role' => 'presentation',
                    'class' => 'divider'
                ]
            ],
            [
                'label' => 'Четвертое действие',
                'url' => '#'
            ]
        ]
    ]
]);
 
echo ButtonDropdown::widget([
    'label' => 'Success',
    'options' => [
        'class' => 'btn-lg btn-success',
        'style' => 'margin:5px'
    ],
    'dropdown' => [
        'items' => [
            [
                'label' => 'Второе действие',
                'url' => '#'
            ],
            [
                'label' => 'Третье действие',
                'url' => '#'
            ],
            [
                'label' => '',
                'options' => [
                    'role' => 'presentation',
                    'class' => 'divider'
                ]
            ],
            [
                'label' => 'Четвертое действие',
                'url' => '#'
            ]
        ]
    ]
]);
 
echo ButtonDropdown::widget([
    'label' => 'Info',
    'options' => [
        'class' => 'btn-lg btn-info',
        'style' => 'margin:5px'
    ],
    'dropdown' => [
        'items' => [
            [
                'label' => 'Второе действие',
                'url' => '#'
            ],
            [
                'label' => 'Третье действие',
                'url' => '#'
            ],
            [
                'label' => '',
                'options' => [
                    'role' => 'presentation',
                    'class' => 'divider'
                ]
            ],
            [
                'label' => 'Четвертое действие',
                'url' => '#'
            ]
        ]
    ]
]);
 
echo ButtonDropdown::widget([
    'label' => 'Warning',
    'options' => [
        'class' => 'btn-lg btn-warning',
        'style' => 'margin:5px'
    ],
    'dropdown' => [
        'items' => [
            [
                'label' => 'Второе действие',
                'url' => '#'
            ],
            [
                'label' => 'Третье действие',
                'url' => '#'
            ],
            [
                'label' => '',
                'options' => [
                    'role' => 'presentation',
                    'class' => 'divider'
                ]
            ],
            [
                'label' => 'Четвертое действие',
                'url' => '#'
            ]
        ]
    ]
]);
 
echo ButtonDropdown::widget([
    'label' => 'Danger',
    'options' => [
        'class' => 'btn-lg btn-danger',
        'style' => 'margin:5px'
    ],
    'dropdown' => [
        'items' => [
            [
                'label' => 'Второе действие',
                'url' => '#'
            ],
            [
                'label' => 'Третье действие',
                'url' => '#'
            ],
            [
                'label' => '',
                'options' => [
                    'role' => 'presentation',
                    'class' => 'divider'
                ]
            ],
            [
                'label' => 'Четвертое действие',
                'url' => '#'
            ]
        ]
    ]
]);
 
echo ButtonDropdown::widget([
    'label' => 'Link',
    'options' => [
        'class' => 'btn-lg btn-link',
        'style' => 'margin:5px'
    ],
    'dropdown' => [
        'items' => [
            [
                'label' => 'Второе действие',
                'url' => '#'
            ],
            [
                'label' => 'Третье действие',
                'url' => '#'
            ],
            [
                'label' => '',
                'options' => [
                    'role' => 'presentation',
                    'class' => 'divider'
                ]
            ],
            [
                'label' => 'Четвертое действие',
                'url' => '#'
            ]
        ]
    ]
]);
?>
Collapse yii\bootstrap\Collapse



<?php echo Collapse::widget([
    'items' => [
        [
            'label' => 'Этот блок открыт, но Вы можете его свернуть.',
            'content' => 'Содержимое блока, открытого по-умолчанию',
            // Открыто по-умолчанию
            'contentOptions' => [
                'class' => 'in'
            ]
        ],
        [
            'label' => 'Этот блок свернут, но Вы можете легко открыть его.',
            'content' => 'Содержимое свернутого блока.',
            'contentOptions' => [],
            'options' => []
        ],
        [
            'label' => 'Нажмите здесь',
            'content' => 'А чего еще Вы ожидали?',
            'contentOptions' => [],
            'options' => []
        ]
    ]
]);

echo Collapse::widget([
    'items' => [
        [
            'label' => 'Этот блок открыт, но Вы можете его свернуть.',
            'content' => 'Содержимое блока, открытого по-умолчанию',
            // Открыто по-умолчанию
            'contentOptions' => [
                'class' => 'in'
            ]
        ],
        [
            'label' => 'Этот блок свернут, но Вы можете легко открыть его.',
            'content' => 'Содержимое свернутого блока.',
            'contentOptions' => [],
            'options' => []
        ],
        [
            'label' => 'Нажмите здесь',
            'content' => 'А чего еще Вы ожидали?',
            'contentOptions' => [],
            'options' => []
        ]
    ]
]);
?>
Modal yii\bootstrap\Modal



<?php Modal::begin([
    'header' => '<h2>Вот это модальное окно!</h2>',
    'toggleButton' => [
        'tag' => 'button',
        'class' => 'btn btn-lg btn-block btn-info',
        'label' => 'Нажмите здесь, забавная штука!',
    ]
]);

echo 'Надо взять на вооружение.';

Modal::end();
?>

Nav yii\bootstrap\Nav
Navbar yii\bootstrap\Navbar



<?php NavBar::begin([
    'brandLabel' => 'Yii Navbar',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-default'
    ]
]);
echo Nav::widget([
    'options' => [
        'class' => 'navbar-nav navbar-right'
    ],
    'items' => [
        [
            'label' => 'Главная',
            'url' => [
                '#'
            ]
        ],
        [
            'label' => 'About',
            'url' => [
                '#'
            ]
        ],
        [
            'label' => 'Обратная связь',
            'url' => [
                '#'
            ]
        ],
        Yii::$app->user->isGuest ? [
            'label' => 'Войти',
            'url' => [
                '#'
            ]
            ] : [
            'label' => 'Выйти ('.Yii::$app->user->identity->username.')',
            'url' => [
                '#'
            ],
            'linkOptions' => [
                'data-method' => 'post'
            ]
            ]
    ]
]);
NavBar::end();

NavBar::begin([
    'brandLabel' => 'Yii Navbar',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-default'
    ]
]);
echo Nav::widget([
    'options' => [
        'class' => 'navbar-nav navbar-right'
    ],
    'items' => [
        [
            'label' => 'Главная',
            'url' => [
                '#'
            ]
        ],
        [
            'label' => 'About',
            'url' => [
                '#'
            ]
        ],
        [
            'label' => 'Обратная связь',
            'url' => [
                '#'
            ]
        ],
        Yii::$app->user->isGuest ? [
            'label' => 'Войти',
            'url' => [
                '#'
            ]
            ] : [
            'label' => 'Выйти ('.Yii::$app->user->identity->username.')',
            'url' => [
                '#'
            ],
            'linkOptions' => [
                'data-method' => 'post'
            ]
            ]
    ]
]);
NavBar::end();
?>
Progress yii\bootstrap\Progress



<?php echo Progress::widget([
    'percent' => 60,
    'label' => 'Ход выполнения'
]);
echo Progress::widget([
    'percent' => 65,
    'barOptions' => [
        'class' => 'progress-bar-danger'
    ]
]);

echo Progress::widget([
    'percent' => 70,
    'barOptions' => [
        'class' => 'progress-bar-warning'
    ],
    'options' => [
        'class' => 'progress-striped'
    ]
]);
echo Progress::widget([
    'percent' => 70,
    'barOptions' => [
        'class' => 'progress-bar-success'
    ],
    'options' => [
        'class' => 'active progress-striped'
    ]
]);
echo Progress::widget([
    'bars' => [
        [
            'percent' => 30,
            'options' => [
                'class' => 'progress-bar-danger'
            ]
        ],
        [
            'percent' => 30,
            'label' => 'Составная задача',
            'options' => [
                'class' => 'progress-bar-success'
            ]
        ],
        [
            'percent' => 35,
            'options' => [
                'class' => 'progress-bar-warning'
            ]
        ]
    ]
]);
?> <br>
<?php
echo Progress::widget([
    'percent' => 60,
    'label' => 'Ход выполнения'
]);
echo Progress::widget([
    'percent' => 65,
    'barOptions' => [
        'class' => 'progress-bar-danger'
    ]
]);
 
echo Progress::widget([
    'percent' => 70,
    'barOptions' => [
        'class' => 'progress-bar-warning'
    ],
    'options' => [
        'class' => 'progress-striped'
    ]
]);
echo Progress::widget([
    'percent' => 70,
    'barOptions' => [
        'class' => 'progress-bar-success'
    ],
    'options' => [
        'class' => 'active progress-striped'
    ]
]);
echo Progress::widget([
    'bars' => [
        [
            'percent' => 30,
            'options' => [
                'class' => 'progress-bar-danger'
            ]
        ],
        [
            'percent' => 30,
            'label' => 'Составная задача',
            'options' => [
                'class' => 'progress-bar-success'
            ]
        ],
        [
            'percent' => 35,
            'options' => [
                'class' => 'progress-bar-warning'
            ]
        ]
    ]
]);
?>
<!--ActiveForm yii\bootstrap\ActiveForm
activeForm -->


<?php /*
$form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'imya')->textInput(['maxlength' => 64]) ?>

<?php echo $form->field($model, 'familiya')->textInput(['maxlength' => 64]) ?>

<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Удалить',
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); 
*/
?>


<pre>Советы по использованию Bootstrap в Yii2
Мы рассмотрели много примеров использования Twitter Bootstrap в приложении Yii 2.0. Теперь давайте уясним несколько простых правил, которые помогут избежать граблей.

1. Не забывайте использовать конструкцию use

Если вы решили использовать виджеты Bootstrap, объявите об этом в начале файла, используя use. Или просто добавьте следующий код в нужный view-файл и используйте любой из описанных виджетов:

use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap\Tabs;
use yii\bootstrap\Alert;
use yii\bootstrap\Button;
use yii\bootstrap\ButtonDropdown;
use yii\bootstrap\ButtonGroup;
use yii\bootstrap\Carousel;
use yii\bootstrap\Collapse;
use yii\bootstrap\Modal;
use yii\bootstrap\Progress;
use yii\bootstrap\ActiveForm;

2. Используйте редактор или среду разработки, которые поддерживают автоматическое форматирование текста

Существует большое количество подходящих редакторов, автоматически форматирующих код в ходе его написания. Их использование позволяет меньше отвлекаться на второстепенные детали, и уделять больше внимая своему творению. Если Вы еще этого не сделали, испробуйте несколько разных IDE/редакторов из множества подходящих для вашей деятельности, выберите один и уделите ему время. Изучите его возможности. Настройка подсветки синтаксиса, автоматического дополнения кода, его форматирования и рефакторинга. И это время съэкономит вам в разы больше в процессе разработки.

3. Как подключить свою тему Bootstrap

Тема по-умолчанию в Bootstrap 3 имеет плоское оформление. Это выглядит лаконично и просто. Но что, если вы хотите изменить его под требования дизайнера или по личным соображениям? Просто настройте его под себя. Измените файл assests/AppSet.php:


class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    public $css      = [
        'css/site.css',
    ];
    public $js       = [
    ];
    public $depends  = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapThemeAsset',
    ];

}

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    public $css      = [
        'css/site.css',
    ];
    public $js       = [
    ];
    public $depends  = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapThemeAsset',
    ];
 
}
Заключение
В этой статье мы узнали, как легко и просто использовать элементы пользовательского интерфейса Twitter Bootstrap в нашем любимом Yii2.

</pre>
<!-- END FEATURES-->







            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
