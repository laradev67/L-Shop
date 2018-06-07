<?php

return [
    'frontend' => [
        'auth' => [
            'login' => [
                'invalid_credentials' => 'Пользователь с такими данными не найден.',
                'welcome' => 'Добро пожаловать, :username!',
                'not_activated' => 'Пользователь не активирован.'
            ],
            'register' => [
                'username_already_exist' => 'Пользователь с таким именем уже существует.',
                'email_already_exist' => 'Пользователь с таким адресом электронной почты существует.',
                'success' => 'Регистрация успешно завершена. Теперь вы можете войти в аккаунт.'
            ],
            'logout' => [
                'success' => 'Вы вышли из аккаунта.'
            ],
            'password' => [
                'forgot' => [
                    'success' => 'На вашу почту отправлено письмо с инструкциями по сбросу пароля.',
                    'user_not_found' => 'Пользователь с таким адресом электронной почты не найден.'
                ],
                'reset' => [
                    'invalid_code' => 'Код сброса пароля не существует или устарел.',
                    'success' => 'Пароль успешно изменён.'
                ]
            ],
            'activation' => [
                'success' => 'Ваш аккаунт успешно активирован!',
                'fail' => 'Код активации недействителен или устарел.',
                'already' => 'Этот аккаунт уже подтвержден.',
                'repeat' => 'Повторный запрос активации отправлен.',
                'user_not_found' => 'Не удалось произвести повторную отправку запроса: пользователь с таким адресом электронной почты не найден или уже активирован.'
            ]
        ],
        'shop' => [
            'catalog' => [
                'put_in_cart' => 'Товар добавлен в корзину.',
                'product_not_found' => 'Товар не найден.',
                'purchase' => [
                    'success' => 'Покупка совершена успешно.'
                ]
            ],
            'cart' => [
                'remove' => [
                    'success' => 'Товар убран из корзины.',
                    'fail' => 'Неудалось убрать товар из корзины.'
                ],
                'purchase' => [
                    'server_not_found' => 'Сервер не существует.'
                ]
            ],
            'payment' => [
                'wait' => 'Платеж обрабатывается. Пожалуйста, подождите.',
                'error' => 'Оплата не удалась.',
            ]
        ],
        'profile' => [
            'skin' => [
                'success' => 'Скин успешно установлен!',
                'disabled' => 'Возможность установки скинов откючена.',
                'invalid_ratio' => 'Неверное соотношение сторон изображения.',
                'invalid_resolution' => 'Неверное разрешение изображения.',
                'delete' => [
                    'success' => 'Скин удалён.',
                    'fail' => 'Не удалось удалить скин.'
                ]
            ],
            'cloak' => [
                'success' => 'Плащ успешно установлен!',
                'disabled' => 'Возможность установки плащей откючена.',
                'invalid_ratio' => 'Неверное соотношение сторон изображения.',
                'invalid_resolution' => 'Неверное разрешение изображения.',
                'delete' => [
                    'success' => 'Плащ удалён.',
                    'fail' => 'Не удалось удалить плащ.'
                ]
            ],
            'settings' => [
                'password_change' => [
                    'success' => 'Пароль изменён успешно.'
                ],
                'reset_sessions' => [
                    'success' => 'Логин-сессии были сброшены. Вам необходимо заново авторизоваться.'
                ]
            ],
            'cart' => [
                'distribution' => [
                    'wait' => 'Действие обрабатывается. Для того, чтобы узнать результат, проверьте ваш внутриигровой
                    инвентарь или обновите страницу.',
                    'not_found' => 'Не удается выдать предмет игроку. Возможно, выдача уже была произведена.'
                ]
            ]
        ]
    ],
    'admin' => [
        'servers' => [
            'switch' => [
                'server_not_found' => 'Не удалось переключить: сервер не найден.',
                'enabled' => 'Сервер был включен.',
                'disabled' => 'Сервер был выключен.',
            ]
        ],
        'products' => [
            'add' => [
                'success' => 'Товар успешно создан.',
                'item_not_found' => 'Не удалось добавить товар: предмет не существует.',
                'category_not_found' => 'Не удалось добавить товар: категория не существует.',
            ],
            'edit' => [
                'success' => 'Товар успешно изменён.',
                'product_not_found' => 'Редактирование не удалось: товар не существует.',
                'item_not_found' => 'Редактирование не удалось: предмет не существует.',
                'category_not_found' => 'Редактирование не удалось: категория не существует.',
            ],
            'delete' => [
                'success' => 'Товар удалён.',
                'not_found' => 'Не удалось удалить: товар не существует.'
            ]
        ],
        'items' => [
            'add' => [
                'success' => 'Предмет успешно создан.'
            ],
            'edit' => [
                'success' => 'Предмет успешно изменён.',
                'not_found' => 'Редактирование не удалось: предмет не существует.'
            ],
            'list' => [
                'delete' => [
                    'success' => 'Предмет был удалён.',
                    'not_found' => 'Не удалось удалить: предмет не существует.'
                ]
            ]
        ],
        'pages' => [
            'add' => [
                'success' => 'Статическая страница успешно создана.',
                'already_exists' => 'Не удалось добавить статическую страницу: страница с таким адресом уже существует.'
            ],
            'edit' => [
                'success' => 'Статическая страница успешно обновлена.',
                'not_found' => 'Не удалось обновить статическую страницу: страница не найдена.'
            ],
            'list' => [
                'delete' => [
                    'success' => 'Страница была удалена.',
                    'not_found' => 'Не удалось удалить статическую страницу: страница не найдена.'
                ]
            ]
        ],
        'users' => [
            'edit' => [
                'success' => 'Пользователь успешно обновлён.',
                'user_not_found' => 'Редактирование не удалось: пользователь не найден.',
                'username_already_exists' => 'Пользователь с таким именем уже существует.',
                'email_already_exists' => 'Пользователь с таким адресом электронной почты уже существует.',
                'ban' => [
                    'add' => [
                        'success' => 'Пользователь заблокирован.',
                        'user_not_found' => 'Заблокировать не удалось: пользователь не найден.'
                    ],
                    'delete' => [
                        'success' => 'Блокировка удалена.',
                        'not_found' => 'Блокировка не найдена.'
                    ]
                ]
            ],
            'list' => [
                'delete' => [
                    'success' => 'Пользователь успешно удалён.',
                    'user_not_found' => 'Не удалось удалить: пользователь не найден.'
                ]
            ]
        ],
        'statistic' => [
            'purchases' => [
                'complete' => [
                    'success' => 'Покупка успешно завершена, содержимое выдано пользователю.',
                    'already_completed' => 'Не удалось завершить покупку: уже завершено.'
                ]
            ]
        ]
    ],
    'api' => [
        'auth' => [
            'sashok724sV3Launcher' => [
                'disabled' => 'Функция отключена',
                'ip_not_in_whitelist' => 'Запрос не может быть выполнен с этого IP',
                'banned' => 'Пользователь заблокирован.'
            ]
        ]
    ],
    'request_error' => [
        'title' => 'Во время выполнения запроса произошла ошибка.',
        'notify' => 'Рекомендуем сообщить об этом администрации ресурса.',
        'main' => 'На главную',
        'back' => 'Назад',
    ],
    'only_for_auth' => 'Для того, чтобы выполнить это действие, вы должны авторизоваться.',
    'user_not_found' => 'Пользователь не найден.',
    'only_for_guests' => 'Только для гостей.',
    'captcha_required' => 'Вы должны подтвердить то, что не являетесь роботом.'
];
