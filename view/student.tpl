{extends file='./main.tpl'}
{block name = body}
    <h1>List of Students</h1>
    <table>
        <tr>
            <th>Student Id</th>
            <th>Student Name</th>
        </tr>
    {foreach $data as $s}
        <tr>
            <td>
                {$s['studentId']}
            </td>
            <td>
                {$s['STUDENT_NAME']}
            </td>
        </tr>
    {/foreach}
    </table>
{/block}