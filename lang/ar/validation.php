<?php

return [

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
    'accepted' => 'يجب قبول حقل :attribute.',
    'accepted_if' => 'يجب قبول حقل :attribute عندما يكون :other هو :value.',
    'active_url' => 'يجب أن يكون حقل :attribute عنوان URL صالحًا.',
    'after' => 'يجب أن يكون حقل :attribute تاريخًا بعد تاريخ :date.',
    'after_or_equal' => 'يجب أن يكون حقل :attribute تاريخًا بعد أو مساويًا لتاريخ :date.',
    'alpha' => 'يجب أن يحتوي حقل :attribute فقط على أحرف.',
    'alpha_dash' => 'يجب أن يحتوي حقل :attribute فقط على أحرف وأرقام وشرطات وشرطات سفلية.',
    'alpha_num' => 'يجب أن يحتوي حقل :attribute فقط على أحرف وأرقام.',
    'array' => 'يجب أن يكون حقل :attribute مصفوفة.',
    'ascii' => 'يجب أن يحتوي حقل :attribute فقط على أحرف وأرقام فردية ورموز.',
    'before' => 'يجب أن يكون حقل :attribute تاريخًا قبل تاريخ :date.',
    'before_or_equal' => 'يجب أن يكون حقل :attribute تاريخًا قبل أو مساويًا لتاريخ :date.',
    'between' => [
        'array' => 'يجب أن يحتوي حقل :attribute على ما بين :min و :max عنصرًا.',
        'file' => 'يجب أن يكون حجم ملف :attribute ما بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute ما بين :min و :max.',
        'string' => 'يجب أن يكون طول حقل :attribute ما بين :min و :max حرفًا.',
    ],
    'boolean' => 'يجب أن يكون حقل :attribute إما صحيحًا أو خاطئًا.',
    'can' => 'حقل :attribute يحتوي على قيمة غير مصرح بها.',
    'confirmed' => 'تأكيد حقل :attribute لا يتطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'يجب أن يكون حقل :attribute تاريخًا صالحًا.',
    'date_equals' => 'يجب أن يكون حقل :attribute تاريخًا مساويًا لتاريخ :date.',
    'date_format' => 'يجب أن يتطابق حقل :attribute مع الشكل :format.',
    'decimal' => 'يجب أن يكون حقل :attribute له :decimal أماكن عشرية.',
    'declined' => 'يجب رفض حقل :attribute.',
    'declined_if' => 'يجب رفض حقل :attribute عندما يكون :other هو :value.',
    'different' => 'يجب أن يكون حقل :attribute و :other مختلفين.',
    'digits' => 'يجب أن يكون حقل :attribute مكونًا من :digits أرقام.',
    'digits_between' => 'يجب أن يكون حقل :attribute مكونًا بين :min و :max أرقام.',
    'dimensions' => 'أبعاد صورة حقل :attribute غير صالحة.',
    'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',
    'doesnt_end_with' => 'يجب أن لا ينتهي حقل :attribute بأحد القيم التالية: :values.',
    'doesnt_start_with' => 'يجب أن لا يبدأ حقل :attribute بأحد القيم التالية: :values.',
    'email' => 'يجب أن يكون حقل :attribute عنوان بريد إلكتروني صالحًا.',
    'ends_with' => 'يجب أن ينتهي حقل :attribute بأحد القيم التالية: :values.',
    'enum' => 'القيمة المحددة لـ :attribute غير صالحة.',
    'exists' => 'القيمة المحددة لـ :attribute غير صالحة.',
    'file' => 'يجب أن يكون حقل :attribute ملفًا.',
    'filled' => 'يجب أن يحتوي حقل :attribute على قيمة.',
    'gt' => [
        'array' => 'يجب أن يحتوي حقل :attribute على أكثر من :value عنصرًا.',
        'file' => 'يجب أن يكون حجم ملف :attribute أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أكبر من :value.',
        'string' => 'يجب أن يكون طول حقل :attribute أكبر من :value حرفًا.',
    ],
    'gte' => [
        'array' => 'يجب أن يحتوي حقل :attribute على :value عنصر أو أكثر.',
        'file' => 'يجب أن يكون حجم ملف :attribute أكبر من أو مساويًا ل :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أكبر من أو مساويًا ل :value.',
        'string' => 'يجب أن يكون طول حقل :attribute أكبر من أو مساويًا ل :value حرفًا.',
    ],
    'image' => 'يجب أن يكون حقل :attribute صورة.',
    'in' => 'القيمة المحددة لـ :attribute غير صالحة.',
    'in_array' => 'يجب أن يكون حقل :attribute موجودًا في :other.',
    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون حقل :attribute عنوان IP صالحًا.',
    'ipv4' => 'يجب أن يكون حقل :attribute عنوان IPv4 صالحًا.',
    'ipv6' => 'يجب أن يكون حقل :attribute عنوان IPv6 صالحًا.',
    'json' => 'يجب أن يكون حقل :attribute سلسلة JSON صالحة.',
    'lowercase' => 'يجب أن يكون حقل :attribute في الحالة الصغيرة (أحرف صغيرة).',
    'lt' => [
        'array' => 'يجب أن يحتوي حقل :attribute على أقل من :value عنصرًا.',
        'file' => 'يجب أن يكون حجم ملف :attribute أقل من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أقل من :value.',
        'string' => 'يجب أن يكون طول حقل :attribute أقل من :value حرفًا.',
    ],
    'lte' => [
        'array' => 'يجب ألا يحتوي حقل :attribute على أكثر من :value عنصر.',
        'file' => 'يجب ألا يتجاوز حجم ملف :attribute :value كيلوبايت أو أقل.',
        'numeric' => 'يجب ألا يكون حقل :attribute أكبر من :value أو يساويه.',
        'string' => 'يجب ألا يكون طول حقل :attribute أكبر من :value حرفًا أو يساويه.',
        ],

        'mac_address' => 'يجب أن يكون حقل :attribute عنوان MAC صالحًا.',

        'max' => [
        'array' => 'يجب ألا يحتوي حقل :attribute على أكثر من :max عنصر.',
        'file' => 'يجب ألا يتجاوز حجم ملف :attribute :max كيلوبايت.',
        'numeric' => 'يجب ألا يكون حقل :attribute أكبر من :max.',
        'string' => 'يجب ألا يكون طول حقل :attribute أكبر من :max حرفًا.',
        ],

        'max_digits' => 'يجب ألا يحتوي حقل :attribute على أكثر من :max أرقام.',

        'mimes' => 'يجب أن يكون حقل :attribute ملفًا من النوع: :values.',

        'mimetypes' => 'يجب أن يكون حقل :attribute ملفًا من النوع: :values.',

        'min' => [
        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عنصر.',
        'file' => 'يجب أن يكون حجم ملف :attribute على الأقل :min كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute على الأقل :min.',
        'string' => 'يجب أن يكون طول حقل :attribute على الأقل :min حرفًا.',
        ],
        'min_digits' => 'يجب أن يحتوي حقل :attribute على الأقل :min أرقام.',

        'missing' => 'يجب أن يكون حقل :attribute مفقودًا.',

        'missing_if' => 'يجب أن يكون حقل :attribute مفقودًا عندما يكون :other هو :value.',

        'missing_unless' => 'يجب أن يكون حقل :attribute مفقودًا ما لم يكن :other هو :value.',

        'missing_with' => 'يجب أن يكون حقل :attribute مفقودًا عندما تكون :values موجودة.',

        'missing_with_all' => 'يجب أن يكون حقل :attribute مفقودًا عندما تكون :values موجودة.',

        'multiple_of' => 'يجب أن يكون حقل :attribute مضاعفًا لـ :value.',

        'not_in' => 'القيمة المحددة لـ :attribute غير صالحة.',

        'not_regex' => 'تنسيق حقل :attribute غير صالح.',

        'numeric' => 'يجب أن يكون حقل :attribute رقمًا.',

        'password' => [
        'letters' => 'يجب أن يحتوي حقل :attribute على الأقل حرف واحد.',
        'mixed' => 'يجب أن يحتوي حقل :attribute على الأقل حرف كبير وحرف صغير واحد.',
        'numbers' => 'يجب أن يحتوي حقل :attribute على الأقل رقم واحد.',
        'symbols' => 'يجب أن يحتوي حقل :attribute على الأقل رمز واحد.',
        'uncompromised' => 'القيمة الممنوحة لـ :attribute ظهرت في تسرب بيانات. يرجى اختيار قيمة مختلفة.',
        ],
        'present' => 'يجب أن يكون حقل :attribute موجودًا.',

        'prohibited' => 'حقل :attribute ممنوع.',

        'prohibited_if' => 'حقل :attribute ممنوع عندما يكون :other هو :value.',

        'prohibited_unless' => 'حقل :attribute ممنوع ما لم يكن :other مدرجًا في :values.',

        'prohibits' => 'حقل :attribute يمنع :other من الوجود.',

        'regex' => 'تنسيق حقل :attribute غير صالح.',

        'required' => 'حقل :attribute مطلوب.',

        'required_array_keys' => 'يجب أن يحتوي حقل :attribute على مدخلات للمفاتيح التالية: :values.',

        'required_if' => 'حقل :attribute مطلوب عندما يكون :other هو :value.',

        'required_if_accepted' => 'حقل :attribute مطلوب عند قبول :other.',

        'required_unless' => 'حقل :attribute مطلوب ما لم يكن :other مدرجًا في :values.',

        'required_with' => 'حقل :attribute مطلوب عند وجود :values.',

        'required_with_all' => 'حقل :attribute مطلوب عند وجود جميع القيم في :values.',

        'required_without' => 'حقل :attribute مطلوب عند عدم وجود :values.',

        'required_without_all' => 'حقل :attribute مطلوب عند عدم وجود أي من القيم في :values.',

        'same' => 'يجب أن يتطابق حقل :attribute مع :other.',
        'size' => [
            'array' => 'يجب أن يحتوي حقل :attribute على :size عنصر.',
            'file' => 'يجب أن يكون حجم ملف :attribute :size كيلوبايت.',
            'numeric' => 'يجب أن يكون حقل :attribute :size.',
            'string' => 'يجب أن يكون طول حقل :attribute :size أحرفًا.',
            ],

            'starts_with' => 'يجب أن يبدأ حقل :attribute بأحد القيم التالية: :values.',

            'string' => 'يجب أن يكون حقل :attribute سلسلة نصية.',

            'timezone' => 'يجب أن يكون حقل :attribute منطقة زمنية صالحة.',

            'unique' => 'تم أخذ حقل :attribute بالفعل.',

            'uploaded' => 'فشل تحميل حقل :attribute.',

            'uppercase' => 'يجب أن يكون حقل :attribute بالأحرف الكبيرة.',

            'url' => 'يجب أن يكون حقل :attribute رابط URL صالح.',

            'ulid' => 'يجب أن يكون حقل :attribute ULID صالحًا.',

            'uuid' => 'يجب أن يكون حقل :attribute UUID صالحًا.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
