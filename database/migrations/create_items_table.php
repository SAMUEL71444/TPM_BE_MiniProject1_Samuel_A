public function up()
{
Schema::create('items', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->text('description')->nullable();
$table->timestamps(); // This line adds created_at and updated_at columns
});
}

public function down()
{
Schema::dropIfExists('items');
}