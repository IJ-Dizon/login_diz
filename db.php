<?php
$conn = pg_connect(
    'host=' . (getenv('SUPABASE_DB_HOST') ?: 'db.fdpiddtxihemhdwllyjm.supabase.co') .
        ' port=' . (getenv('SUPABASE_DB_PORT') ?: '5432') .
        ' dbname=' . (getenv('SUPABASE_DB_NAME') ?: 'postgres') .
        ' user=' . (getenv('SUPABASE_DB_USER') ?: 'postgres') .
        ' password=' . $dbPassword .
        ' sslmode=require'
);

if (!$conn) {
    exit('Database connection failed.');
}
