\App\Post::create([
'title'=>'test title',
'content'=>'test content',
]);

protected $fillable = [
'title',
'content',
'is_feature'
];