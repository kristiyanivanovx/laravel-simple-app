<?php

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [
    'accepted'             => 'Трябва да приемете :attribute.',
    'accepted_if'          => 'Полето :attribute трябва да е прието, когато :other е :value.',
    'active_url'           => 'Полето :attribute не е валиден URL адрес.',
    'after'                => 'Полето :attribute трябва да бъде дата след :date.',
    'after_or_equal'       => 'Полето :attribute трябва да бъде дата след или равна на :date.',
    'alpha'                => 'Полето :attribute трябва да съдържа само букви.',
    'alpha_dash'           => 'Полето :attribute трябва да съдържа само букви, цифри, долна черта и тире.',
    'alpha_num'            => 'Полето :attribute трябва да съдържа само букви и цифри.',
    'array'                => 'Полето :attribute трябва да бъде масив.',
    'attached'             => 'Този номер :attribute вече е прикачен.',
    'before'               => 'Полето :attribute трябва да бъде дата преди :date.',
    'before_or_equal'      => 'Полето :attribute трябва да бъде дата преди или равна на :date.',
    'between'              => [
        'array'   => 'Полето :attribute трябва да има между :min - :max елемента.',
        'file'    => 'Полето :attribute трябва да бъде между :min и :max килобайта.',
        'numeric' => 'Полето :attribute трябва да бъде между :min и :max.',
        'string'  => 'Полето :attribute трябва да бъде между :min и :max знака.',
    ],
    'boolean'              => 'Полето :attribute трябва да съдържа Да или Не',
    'confirmed'            => 'Полето :attribute не е потвърдено.',
    'current_password'     => 'Паролата е неправилна.',
    'date'                 => 'Полето :attribute не е валидна дата.',
    'date_equals'          => ':attribute трябва да бъде дата, еднаква с :date.',
    'date_format'          => 'Полето :attribute не е във формат :format.',
    'different'            => 'Полетата :attribute и :other трябва да са различни.',
    'digits'               => 'Полето :attribute трябва да има :digits цифри.',
    'digits_between'       => 'Полето :attribute трябва да има между :min и :max цифри.',
    'dimensions'           => 'Невалидни размери за снимка :attribute.',
    'distinct'             => 'Данните в полето :attribute се дублират.',
    'email'                => 'Полето :attribute е в невалиден формат.',
    'ends_with'            => ':attribute трябва да завършва с една от следните стойности: :values.',
    'exists'               => 'Избранато поле :attribute вече съществува.',
    'file'                 => 'Полето :attribute трябва да бъде файл.',
    'filled'               => 'Полето :attribute е задължително.',
    'gt'                   => [
        'array'   => ':attribute трябва да разполага с повече от :value елемента.',
        'file'    => ':attribute трябва да бъде по-голяма от :value килобайта.',
        'numeric' => ':attribute трябва да бъде по-голяма от :value.',
        'string'  => ':attribute трябва да бъде по-голяма от :value знака.',
    ],
    'gte'                  => [
        'array'   => ':attribute трябва да разполага с :value елемента или повече.',
        'file'    => ':attribute трябва да бъде по-голяма от или равна на :value килобайта.',
        'numeric' => ':attribute трябва да бъде по-голяма от или равна на :value.',
        'string'  => ':attribute трябва да бъде по-голяма от или равна на :value знака.',
    ],
    'image'                => 'Полето :attribute трябва да бъде изображение.',
    'in'                   => 'Избраното поле :attribute е невалидно.',
    'in_array'             => 'Полето :attribute не съществува в :other.',
    'integer'              => 'Полето :attribute трябва да бъде цяло число.',
    'ip'                   => 'Полето :attribute трябва да бъде IP адрес.',
    'ipv4'                 => 'Полето :attribute трябва да бъде IPv4 адрес.',
    'ipv6'                 => 'Полето :attribute трябва да бъде IPv6 адрес.',
    'json'                 => 'Полето :attribute трябва да бъде JSON низ.',
    'lt'                   => [
        'array'   => ':attribute трябва да разполага с по-малко от :value елемента.',
        'file'    => ':attribute трябва да бъде по-малка от :value килобайта.',
        'numeric' => ':attribute трябва да бъде по-малка от :value.',
        'string'  => ':attribute трябва да бъде по-малка от :value знака.',
    ],
    'lte'                  => [
        'array'   => ':attribute не трябва да разполага с повече от :value елемента.',
        'file'    => ':attribute трябва да бъде по-малка от или равна на :value килобайта.',
        'numeric' => ':attribute трябва да бъде по-малка от или равна на :value.',
        'string'  => ':attribute трябва да бъде по-малка от или равна на :value знака.',
    ],
    'max'                  => [
        'array'   => 'Полето :attribute трябва да има по-малко от :max елемента.',
        'file'    => 'Полето :attribute трябва да бъде по-малко от :max килобайта.',
        'numeric' => 'Полето :attribute трябва да бъде по-малко от :max.',
        'string'  => 'Полето :attribute трябва да бъде по-малко от :max знака.',
    ],
    'mimes'                => 'Полето :attribute трябва да бъде файл от тип: :values.',
    'mimetypes'            => 'Полето :attribute трябва да бъде файл от тип: :values.',
    'min'                  => [
        'array'   => 'Полето :attribute трябва има минимум :min елемента.',
        'file'    => 'Полето :attribute трябва да бъде минимум :min килобайта.',
        'numeric' => 'Полето :attribute трябва да бъде минимум :min.',
        'string'  => 'Полето :attribute трябва да бъде минимум :min знака.',
    ],
    'multiple_of'          => 'Числото :attribute трябва да бъде кратно на :value',
    'not_in'               => 'Избраното поле :attribute е невалидно.',
    'not_regex'            => 'Форматът на :attribute е невалиден.',
    'numeric'              => 'Полето :attribute трябва да бъде число.',
    'password'             => 'Паролата е грешна.',
    'present'              => 'Полето :attribute трябва да съествува.',
    'prohibited'           => 'Поле :attribute е забранено.',
    'prohibited_if'        => 'Полето :attribute е забранено, когато :other е равно на :value.',
    'prohibited_unless'    => 'Полето :attribute е забранено, освен ако :other не е в :values.',
    'prohibits'            => 'Полето :attribute изключва наличието на :other.',
    'regex'                => 'Полето :attribute е в невалиден формат.',
    'relatable'            => 'Този :attribute може да не е свързан с този ресурс.',
    'required'             => 'Полето :attribute е задължително.',
    'required_if'          => 'Полето :attribute се изисква, когато :other е :value.',
    'required_unless'      => 'Полето :attribute се изисква, освен ако :other не е в :values.',
    'required_with'        => 'Полето :attribute се изисква, когато :values има стойност.',
    'required_with_all'    => 'Полето :attribute е задължително, когато :values имат стойност.',
    'required_without'     => 'Полето :attribute се изисква, когато :values няма стойност.',
    'required_without_all' => 'Полето :attribute се изисква, когато никое от полетата :values няма стойност.',
    'same'                 => 'Полетата :attribute и :other трябва да съвпадат.',
    'size'                 => [
        'array'   => 'Полето :attribute трябва да има :size елемента.',
        'file'    => 'Полето :attribute трябва да бъде :size килобайта.',
        'numeric' => 'Полето :attribute трябва да бъде :size.',
        'string'  => 'Полето :attribute трябва да бъде :size знака.',
    ],
    'starts_with'          => ':attribute трябва да започва с едно от следните: :values.',
    'string'               => 'Полето :attribute трябва да бъде знаков низ.',
    'timezone'             => 'Полето :attribute трябва да съдържа валидна часова зона.',
    'unique'               => 'Полето :attribute вече съществува.',
    'uploaded'             => 'Неуспешно качване на :attribute.',
    'url'                  => 'Полето :attribute е в невалиден формат.',
    'uuid'                 => ':attribute трябва да бъде валиден UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes' => array('name' => 'име')
];
