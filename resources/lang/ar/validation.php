<?php

return [

    /*
   |--------------------------------------------------------------------------
   | Validation Language Lines
   |--------------------------------------------------------------------------
   |
   | The following language lines contain the default error messages used by
   | the validator class. Some of these rules have multiple versions such
   | as the size rules. Feel free to tweak each of these messages.
   |
   */
    'company_name_rule' => 'اسم الشركة مطلوب',
    'accepted' => 'يجب قبول :attribute',
    'active_url' => ':attribute لا يُمثّل رابطًا صحيحًا',
    'after' => 'يجب على :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal' => ':attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha' => 'يجب أن لا يحتوي :attribute سوى على حروف',
    'alpha_dash' => 'يجب أن لا يحتوي :attribute سوى على حروف، أرقام ومطّات.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
    'array' => 'يجب أن يكون :attribute ًمصفوفة',
    'before' => 'يجب على :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal' => ':attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date',
    'between' => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max',
        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max',
    ],
    'boolean' => 'يجب أن تكون قيمة :attribute إما true أو false ',
    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',
    'date' => ':attribute ليس تاريخًا صحيحًا',
    'date_format' => 'لا يتوافق :attribute مع الشكل :format.',
    'different' => 'يجب أن يكون الحقلان :attribute و :other مُختلفان',
    'digits' => 'يجب أن يحتوي :attribute على :digits رقمًا/أرقام',
    'digits_between' => 'يجب أن يحتوي :attribute بين :min و :max رقمًا/أرقام ',
    'dimensions' => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'للحقل :attribute قيمة مُكرّرة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
    'exists' => 'القيمة المحددة :attribute غير موجودة',
    'file' => 'الـ :attribute يجب أن يكون ملفا.',
    'filled' => ':attribute إجباري',
    'gt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت',
        'string' => 'يجب أن يكون طول النّص :attribute أكثر من :value حروفٍ/حرفًا',
        'array' => 'يجب أن يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'gte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :min.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :value كيلوبايت',
        'string' => 'يجب أن يكون طول النص :attribute على الأقل :value حروفٍ/حرفًا',
        'array' => 'يجب أن يحتوي :attribute على الأقل على :value عُنصرًا/عناصر',
    ],
    'image' => 'يجب أن يكون :attribute صورةً',
    'in' => ':attribute غير موجود',
    'in_array' => ':attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا',
    'ip' => 'يجب أن يكون :attribute عنوان IP صحيحًا',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صحيحًا.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صحيحًا.',
    'json' => 'يجب أن يكون :attribute نصآ من نوع JSON.',
    'lt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أصغر من :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :value كيلوبايت',
        'string' => 'يجب أن يكون طول النّص :attribute أقل من :value حروفٍ/حرفًا',
        'array' => 'يجب أن يحتوي :attribute على أقل من :value عناصر/عنصر.',
    ],
    'lte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :max.',
        'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت',
        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'max' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :max.',
        'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت',
        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'min' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :min.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت',
        'string' => 'يجب أن يكون طول النص :attribute على الأقل :min حروفٍ/حرفًا',
        'array' => 'يجب أن يحتوي :attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'not_in' => ':attribute موجود',
    'not_regex' => 'صيغة :attribute غير صحيحة.',
    'numeric' => 'يجب على :attribute أن يكون رقمًا',
    'present' => 'يجب تقديم :attribute',
    'regex' => 'صيغة :attribute .غير صحيحة',
    'required' => ':attribute مطلوب.',
    'required_if' => ':attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless' => ':attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with' => ':attribute مطلوب إذا توفّر :values.',
    'required_with_all' => ':attribute مطلوب إذا توفّر :values.',
    'required_without' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق :attribute مع :other',
    'size' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية لـ :size',
        'file' => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت',
        'string' => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالضبط',
        'array' => 'يجب أن يحتوي :attribute على :size عنصرٍ/عناصر بالضبط',
    ],
    'string' => 'يجب أن يكون :attribute نصآ.',
    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
    'unique' => 'قيمة :attribute مُستخدمة من قبل',
    'uploaded' => 'فشل في تحميل الـ :attribute',
    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'captcha' => 'قيمة الرمز :attribute غير صحيحة',
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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'ssn' => 'الرقم المدني',
        'cost' => 'التكلفه',
        'amount' => 'المبلغ',
        'notes' => 'الملاحظات',
        'date' => 'التاريخ',
        'time' => 'الوقت',
        'username' => 'اسم المستخدم',
        'comment' => 'التعليق',
        'max_drivers' => 'أقصى عدد سائقين',
        'address' => 'العنوان',
        'vehicles' => 'السيارات',
        'vehicle_id' => 'السيارة',
        'message' => 'الرسالة',
        'title' => 'الاسم',
        'name' => 'الاسم',
        'email' => 'البريد الالكترونى',
        'phone' => 'رقم الهاتف',
        'password' => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'from_day' => 'من يوم',
        'to_day' => 'الى يوم',
        'debt_type' => 'نوع المديونيه',
        'debt_peroid' => 'فترة المديونيه',
        'start' => 'تاريخ البدء',
        'end' => 'تاريخ الانتهاء',
        'total' => 'الاجمالى',
        'paid' => 'المدفوع',
        'firstname' => 'الاسم الاول',
        'lastname' => 'الاسم الاخير',
        'pickdate' => 'تاريخ الاستلام',
        'picktime' => 'وقت الاستلام',
        'returndate' => 'تاريخ الارجاع',
        'returntime' => 'وقت الارجاع',
        'flight_number' => 'رقم الرحله',
        'flight_date' => 'تاريخ الرحله',
        'flight_time' => 'وقت الرحله',
        'discount_value' => 'قيمة الخصم',
        'discount_percent' => 'نسبة الخصم',
        'additional_fees_value' => 'القيمة الاضافيه',
        'additional_fees_percent' => 'النسبة الاضافيه',
        'gender' => 'النوع',
        'issued_on' => 'صادر بتاريخ',
        'expired_on' => 'ينتهى بتاريخ',
        'file' => 'الملف',
        'birthday' => 'تاريخ الميلاد',
        'prefix' => 'البادئه',
        'role' => 'الدور',
        'vehicle_key' => 'رقم السياره',
        'vehicle_license_plate' => 'رقم لوحة السياره',
        'year' => 'السنه',
        'color' => 'اللون',
        'vin' => 'رقم الموتور',
        'odometer' => 'عدد الكيلو مترات',
        'fuel_level_id' => 'مستوى الوقود',
        'last_maintenance' => 'اخر صيانه',
        'last_maintenance_odometer' => 'عدد الكيلومترات فى اخر صيانه',
        'cost_per_day' => 'التكلفه اليوميه',
        'oldCar' => 'السياره السابقه',
        'newFuelLevel' => 'مستوى الوقود الجديد',
        'newOdometer' => 'عدد الكيلومترات الجديد',
        'newReturnDate' => 'تاريخ الارجاع الجديد',
        'newReturnTime' => 'وقت الارجاع الجديد',
        'newVehicle' => 'السياره الحديثه',
        'fine_number' => 'رقم الغرامه',
        'fine_date' => 'تاريخ الغرامه',
        'emailorphone' => 'البريد الالكترونى او رقم الهاتف',
        'pass' => 'رقم المرور',
        'text' => 'النص',
        'files' => 'الملفات',
        'company' => 'الشركه',
        'token' => 'الكود',
        'branches' => 'الفروع',
        'customer_id' => 'العميل',
        'trade_name' => 'الاسم التجاري',
        'form' => 'التصنيف',
        'pharmashare_code' => 'الباركود',
        'active_ingredient' => 'المادة الفعالة',
        'manufacturer' => 'المصنع',
        'strength' => 'التركيز',
        'pack_size' => 'سعة الباكيت',
        'link' => 'الرابط',
        'original_image' => 'الصورة',
        'scaled_image' => 'الصورة الاخري',
        'min_number_of_drugs' => 'عدد الادوية من',
        'max_number_of_drugs' => 'عدد الادوية الى',
        'price' => 'السعر',
        'period_in_days' => 'الفترة',
        'minimum_order_value_or_quantity' => 'الحد الادني',
        'offered_price_or_bonus' => 'التكلفة',
        'available_quantity_in_packs' => 'الكمية  ',
        'drug_store_ids' => 'الادوية',
        'job_name' => 'المسمي الوظيفي',
        'requirements' => 'البيانات المطلوبة',
        'contacts' => 'بيانات التواصل',
        'trade_license' => 'رخصة مزاولة المهنة',
        'passport' => 'جواز السفر',
        'pharmacy_license' => 'رخصة الصيدلية',
        'to_user_id' => 'المرسل اليه',
        'old_password' => 'كلمة المرور السابقة',
        'image' =>'الصورة'
        ],


];
