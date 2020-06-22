<?php

namespace App\models\teams;

use Exception;
use Illuminate\Database\Eloquent\Model;

class TeamCategoryModel extends Model
{
    //
    protected $table = "team_categories";
    protected $fillable = [
        "category_name",
        "category_description",
        "is_active",
        "created_by"
    ];
    protected $error_message = null;

    public function createCategory($data, $creator)
    {
        try {
            return $this->create([
                "category_name" => $data["categoryName"],
                "category_description" => $data["categoryDescription"],
                "created_by" => $creator
            ]);
        } catch (Exception $e) {
            $this->error_message = $e->getMessage();
            return false;
        }
    }

    public function getError()
    {
        return $this->error_message;
    }
}
