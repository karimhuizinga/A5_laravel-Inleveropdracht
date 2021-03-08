<?php
  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;
  class AlterContactsTable extends Migration
  {
    public function up()
    {
      Schema::table('contacts', function (Blueprint $table) {
        $table->foreignId('company_id')->constrained();
      });
    }

      public function down()
      {
          Schema::table('contacts', function (Blueprint $table) {
            $table->dropForeign(['company_id']);
            $table->dropColumn('company_id');
        });
      }

}
