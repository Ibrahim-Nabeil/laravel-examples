<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
 
use App\Models\Student;
class StudentStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:StudentStatus';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change student status';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $students = Student::where('fees', 32)->get();
        // $student = Student::find(1);

        foreach ($students as  $student) {

            $student->status = 1;
            $student->save();

        }

        return Command::SUCCESS;
    }
}
