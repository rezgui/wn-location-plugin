<?php namespace Winter\Location\Updates;

use Winter\Storm\Database\Updates\Seeder;
use Winter\Location\Models\Country;

class SeedDzStates extends Seeder
{
    public function run()
    {
        $country = Country::whereCode('DZ')->first();

        if ($country->states()->count() > 0) {
            return;
        }

        $country->states()->createMany([
            ['code' => 'DZ01', 'name' => 'أدرار'],
            ['code' => 'DZ02', 'name' => 'الشلف'],
            ['code' => 'DZ03', 'name' => 'الأغواط'],
            ['code' => 'DZ04', 'name' => 'أم البواقي'],
            ['code' => 'DZ05', 'name' => 'باتنة'],
            ['code' => 'DZ06', 'name' => ' بجاية'],
            ['code' => 'DZ07', 'name' => 'بسكرة'],
            ['code' => 'DZ08', 'name' => 'بشار'],
            ['code' => 'DZ09', 'name' => 'البليدة'],
            ['code' => 'DZ10', 'name' => 'البويرة'],
            ['code' => 'DZ11', 'name' => 'تمنراست'],
            ['code' => 'DZ12', 'name' => 'تبسة'],
            ['code' => 'DZ13', 'name' => 'تلمسان'],
            ['code' => 'DZ14', 'name' => 'تيارت'],
            ['code' => 'DZ15', 'name' => 'تيزي وزو'],
            ['code' => 'DZ16', 'name' => 'الجزائر'],
            ['code' => 'DZ17', 'name' => 'الجلفة'],
            ['code' => 'DZ18', 'name' => 'جيجل'],
            ['code' => 'DZ19', 'name' => 'سطيف'],
            ['code' => 'DZ20', 'name' => 'سعيدة'],
            ['code' => 'DZ21', 'name' => 'سكيكدة'],
            ['code' => 'DZ22', 'name' => 'سيدي بلعباس'],
            ['code' => 'DZ23', 'name' => 'عنابة'],
            ['code' => 'DZ24', 'name' => 'قالمة'],
            ['code' => 'DZ25', 'name' => 'قسنطينة'],
            ['code' => 'DZ26', 'name' => 'المدية'],
            ['code' => 'DZ27', 'name' => 'مستغانم'],
            ['code' => 'DZ28', 'name' => 'المسيلة'],
            ['code' => 'DZ29', 'name' => 'معسكر'],
            ['code' => 'DZ30', 'name' => 'ورقلة'],
            ['code' => 'DZ31', 'name' => 'وهران'],
            ['code' => 'DZ32', 'name' => 'البيض'],
            ['code' => 'DZ33', 'name' => 'إليزي'],
            ['code' => 'DZ34', 'name' => 'برج بوعريريج'],
            ['code' => 'DZ35', 'name' => 'بومرداس'],
            ['code' => 'DZ36', 'name' => 'الطارف'],
            ['code' => 'DZ37', 'name' => 'تندوف'],
            ['code' => 'DZ38', 'name' => 'تيسمسيلت'],
            ['code' => 'DZ39', 'name' => 'الوادي'],
            ['code' => 'DZ40', 'name' => 'خنشلة'],
            ['code' => 'DZ41', 'name' => 'سوق أهراس'],
            ['code' => 'DZ42', 'name' => 'تيبازة'],
            ['code' => 'DZ43', 'name' => 'ميلة'],
            ['code' => 'DZ44', 'name' => 'عين الدفلة'],
            ['code' => 'DZ45', 'name' => 'النعامة'],
            ['code' => 'DZ46', 'name' => 'عين تيموشنت'],
            ['code' => 'DZ47', 'name' => 'غرداية'],
            ['code' => 'DZ48', 'name' => 'غليزان'],
            ['code' => 'DZ49', 'name' => 'تيميمون'],
            ['code' => 'DZ50', 'name' => 'برج باجي مختار'],
            ['code' => 'DZ51', 'name' => 'أولاد جلال'],
            ['code' => 'DZ52', 'name' => 'بني عباس'],
            ['code' => 'DZ53', 'name' => 'عين صالح'],
            ['code' => 'DZ54', 'name' => 'عين قزام'],
            ['code' => 'DZ55', 'name' => 'تقرت'],
            ['code' => 'DZ56', 'name' => 'جانت'],
            ['code' => 'DZ57', 'name' => 'المغير'],
            ['code' => 'DZ58', 'name' => 'المنيعة'],
        ]);
    }
}
